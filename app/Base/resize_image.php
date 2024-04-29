<?php
function resize_image()
{
    $resizes = [
        'news_cat' => [
            'pic_banner' => [
                [
                    '1360' => '318',
                ],
                [
                    '1370' => '350',
                ],
                [
                    '60' => '60',
                ],
                [
                    '50' => '60',
                ],
            ]
        ],
        'news' => [
            'pic' => [
                [
                    '568' => '546',
                ],
                [
                    '372' => '358'
                ],
                [
                    '274' => '264'
                ],
                [
                    '78' => '78'
                ],
                [
                    '600' => '400'
                ],
// admin_no_image[
//                '50' => '50'
//            ],
            ],
            'pic_banner'=>[
                [
                    '1360' => '318',
                ],
            ]
        ],
        'content_news' => [
            'pic' => [
                [
                    '300' => '200',
                ],
                [
                    '700' => '700',
                ],
                [
                    '400' => '500',
                ],
            ],
            'pics' => [
                [
                    '1300' => '200',
                ],
                [
                    '700' => '700',
                ],

            ],
            'catalog' => [
                [
                    '1360' => '318',
                ],
                [
                    '1360' => '350',
                ],
            ],
            'video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
            'pic_video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
        ],
        'banner_type_1' => [
            'pic' => [
                [
                    '1360' => '718',
                ],
            ]
        ],
        'banner_type_2' => [
            'pic' => [
                [
                    '1360' => '400',
                ],
            ]
        ],

    ];

    return $resizes;
}
