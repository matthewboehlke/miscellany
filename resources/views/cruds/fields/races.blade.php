@if (!$campaign->enabled('races'))
    <?php return ?>
@endif

@php
$preset = null;
if (isset($model) && $model->race) {
    $preset = $model->race;
} elseif (isset($isRandom) && $isRandom) {
    $preset = $random->generateForeign(\App\Models\Race::class);
} elseif (isset($parent) && $parent) {
    $preset = FormCopy::field('race')->select(true, \App\Models\Race::class);
} else {
    $preset = FormCopy::field('race')->select();
}
if (!isset($source)) {
    $source = null;
}

$data = [
    'preset' => $preset,
    'class' => App\Models\Race::class,
];
if (isset($enableNew)) {
    $data['allowNew'] = $enableNew;
}
if (isset($parent) && $parent) {
    $data['labelKey'] = 'races.fields.race';
}
if (isset($dropdownParent)) {
    $data['dropdownParent'] = $dropdownParent;
}
if (isset($from)) {
    $data['from'] = $from;
}
@endphp
<input type="hidden" name="sync_org_members" value="1">
<div class="form-group">
    {!! Form::races(
        'id',
        [
            'model' => isset($model) ? $model : FormCopy::model(),
            'source' => $source
        ]
    ) !!}
</div>