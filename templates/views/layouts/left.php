<aside class="main-sidebar">

    <section class="sidebar">



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Master',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [

                            [
                                'label' => 'Organisasi',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Divisi', 'icon' => 'fa fa-circle-o', 'url' => "@web/divisi/index",],

                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>