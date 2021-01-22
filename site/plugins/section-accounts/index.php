<?php 

Kirby::plugin('tjikko/section-accounts', [
    'sections' => [
        // 'accounts' => 'pagesdisplay' => require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'AccountsSection.php'
        'accounts' => [
            'props' => [
                'headline' => function ($headline) {
                    return $headline;
                }
            ]
        ]
    ]
]);