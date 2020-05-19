<?php

return [
    'sync' => [
        'actions' => [
            'sync' => 'Synchronize',
        ],
        'title' => 'LookingForGM.com Campaign Sync',
        'helper' => 'Select a campaign to sync your upcoming events from :lfgm. This will add a Note with your upcoming events to that campaigns and pin it to the campaign dashboard.',
        'errors' => [
            'invalid_uuid' => 'Invalid LFGM campaign id. Please try again.',
        ],
        'successes' => [
            'sync' => 'LGFM calendar synced.',
        ]
    ]
];
