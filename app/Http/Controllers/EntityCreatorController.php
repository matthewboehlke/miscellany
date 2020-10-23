<?php

namespace App\Http\Controllers;

use App\Facades\CampaignLocalization;
use App\Facades\FormCopy;
use App\Http\Requests\StoreNote;
use App\Models\Entity;
use App\Models\Campaign;
use App\Models\MiscModel;
use App\Services\EntityService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class EntityCreatorController extends Controller
{
    /**
     * @var EntityService
     */
    protected $entityService;

    /** @var Campaign $campaign */
    protected $campaign;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EntityService $entityService)
    {
        $this->middleware('auth');
        $this->middleware('campaign.member');
        $this->entityService = $entityService;

        $this->campaign = CampaignLocalization::getCampaign();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function selection()
    {
        return view('entities.creator.selection', [
            'entities' => $this->availableEntities(),
            'templates' => $this->entityService->templates()
        ]);
    }

    /**
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function form($type)
    {
        // Make sure the user is allowed to create this kind of entity
        $model = $this->entityService->getClass($type);
        $this->authorize('create', $model);

        return view('entities.creator.form', [
            'type' => $type,
            'singularType' => Str::singular($type),
            'source' => null,
        ]);
    }

    /**
     * @param $template
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function template($template)
    {
        // Get the template
        /** @var Entity $template */
        $template = Entity::where('is_template', true)->where('id', $template)->firstOrFail();
        $type = $template->pluralType();

        // Make sure the user is allowed to create this kind of entity
        $model = $this->entityService->getClass($type);
        $this->authorize('create', $model);

        FormCopy::source($template->child);

        return view('entities.creator.form', [
            'type' => $type,
            'source' => $template,
            'singularType' => Str::singular($type),
        ]);
    }

    /**
     * @param $type
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store($type)
    {
        // Make sure the user is allowed to create this kind of entity
        $class = $this->entityService->getClass($type);
        $this->authorize('create', $class);

        /** @var FormRequest $request */
        // This is dirty. Todo: change? We really need a entity -> icon, name, class, validator service somewhere
        $requestValidator = '\App\Http\Requests\Store' . ucfirst(Str::singular($type));
        $request = app($requestValidator);
        $values = $request->all();

        if (!empty($values['entry'])) {
            $values['entry'] = nl2br($values['entry']);
        } elseif ($values['entity'] == 'notes') {
            $values['entry'] = '';
        }

        // Hook the source if using a template
        if (request()->has('source')) {
            /** @var Entity $template */
            $template = Entity::where('is_template', true)
                ->where('id', request()->post('source'))
                ->firstOrFail();

            // Add values not available through the quick creator interface
        }

        /** @var MiscModel $model */
        $model = new $class;
        $new = $model->create($values);
        $new->crudSaved();
        $new->entity->crudSaved();

        return response()->json([
            'success' => true,
            'message' => __('entities.creator.success', ['link' => link_to($new->getLink(), e($new->name))])
        ]);
    }

    /**
     * Build a list of available entities for the quick creator
     * @return array
     */
    protected function availableEntities(): array
    {
        $entities = [];

        // Loop through the entities, check those enabled in the campaign, and where the user has create access.
        foreach ($this->entityService->entities([
            'calendars', 'conversations', 'tags', 'dice_rolls', 'menu_links'
        ]) as $name => $class) {
            if ($this->campaign->enabled($name)) {
                if (auth()->user()->can('create', $class)) {
                    $entities[$name] = $class;
                }
            }
        }

        return $entities;
    }
}
