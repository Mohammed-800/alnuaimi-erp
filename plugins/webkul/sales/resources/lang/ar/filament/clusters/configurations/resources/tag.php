<?php

return [
    'title' => 'العلامة',

    'navigation' => [
        'title' => 'العلامات',
        'group' => 'أوامر البيع',
    ],

    'form' => [
        'fields' => [
            'name' => 'الاسم',
            'color' => 'اللون',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'أنشئ بواسطة',
            'name' => 'الاسم',
            'color' => 'اللون',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث علامة المنتج',
                    'body' => 'تم تحديث علامة المنتج بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف علامة المنتج',
                    'body' => 'تم حذف علامة المنتج بنجاح.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف علامة المنتج',
                    'body' => 'تم حذف علامة المنتج بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'الاسم',
            'color' => 'اللون',
        ],
    ],
];
