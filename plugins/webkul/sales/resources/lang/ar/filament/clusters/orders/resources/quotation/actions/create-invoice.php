<?php

return [
    'title' => 'إنشاء فاتورة',

    'modal' => [
        'heading' => 'إنشاء فاتورة',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => 'تم إنشاء الفاتورة',
            'body' => 'تم إنشاء الفاتورة بنجاح.',
        ],

        'no-invoiceable-lines' => [
            'title' => 'لا توجد بنود قابلة للفوترة',
            'body' => 'لا توجد بنود قابلة للفوترة، يرجى التأكد من أن الكمية قد تم استلامها.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => 'إنشاء فاتورة',
        ],
    ],
];
