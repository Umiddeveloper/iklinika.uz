<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/avatar2.jpeg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Управление', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Меню',
                        'icon' => 'th-list',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Главное меню', 'icon' => 'list', 'url' => ['/cms/menu/index?slug=main']],
                            ['label' => 'Меню нижнего колонтитула', 'icon' => 'th-list', 'url' => ['/cms/menu/index?slug=footer-main']],
                        ]
                    ],
                    [
                        'label' => 'Наши услуги',
                        'icon' => 'bars',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Бесплатные услуги', 'icon' => 'th-list', 'url' => ['/cms/items/index?slug=freeservices']],
                            ['label' => 'Платные услуги ', 'icon' => 'th-list', 'url' => ['/cms/items/index?slug=paindservices']],
                        ]
                    ],
                    [
                        'label' => 'Фото',
                        'icon' => 'image',
                        'url' => ['/cms/items/index?slug=photo']
                    ],
                    [
                        'label' => 'Применение',
                        'icon' => 'tags',
                        'url' => ['/cms/items/index?slug=application']
                    ],
                    [
                        'label' => 'Файл',
                        'icon' => 'file',
                        'url' => ['/cms/items/index?slug=file']
                    ],
                    [
                        'label' => 'Информационно-правовая ',
                        'icon' => 'info',
                        'url' => ['/cms/items/index?slug=info']
                    ],
                    [
                        'label' => 'Помошь в мигрантам',
                        'icon' => 'font',
                        'url' => ['/cms/items/index?slug=list']
                    ],
                    [
                        'label' => 'Отзывы',
                        'icon' => 'user',
                        'url' => ['/cms/items/index?slug=reviews']
                    ],
                    [
                        'label' => 'Фотогалерея',
                        'icon' => 'image',
                        'url' => ['/cms/items/index?slug=photo-gallery']
                    ],
                    [
                        'label' => 'Проблема',
                        'icon' => 'font',
                        'url' => ['/cms/items/index?slug=problem']
                    ],
                    [
                        'label' => 'Цeнтры оказания помощи',
                        'icon' => 'th-large',
                        'url' => ['/cms/items/index?slug=center']
                    ],
                    [
                        'label' => 'Наши специалисты ',
                        'icon' => 'users',
                        'url' => ['/cms/items/index?slug=specialist']
                    ],
                    [
                        'label' => 'Оставить заявку',
                        'icon' => 'font',
                        'url' => ['/cms/items/index?slug=application']
                    ],
                    [
                        'label' => 'Статичные страницы',
                        'icon' => 'clone',
                        'url' => ['/cms/items/index?slug=page']
                    ],
                    [
                        'label' => 'Политика приложения',
                        'icon' => 'clone',
                        'url' => ['/cms/items/index?slug=policy']
                    ],
                    ['label' => 'Фото', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Главное фото',
                        'icon' => 'list-alt',
                        'url' => ['/cms/unit-categories/view?id=1']
                    ],
                    ['label' => 'Инфо', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Контакт',
                        'icon' => 'phone',
                        'url' => ['/cms/unit-categories/view?id=2']
                    ],

                    ['label' => 'Прочее', 'options' => ['class' => 'header']],
                    ['label' => 'Оставленные сообщения', 'icon' => 'envelope', 'url' => ['/contact']],
                    ['label' => 'Пользавателы', 'icon' => 'users', 'url' => ['/user']],
                ],

            ]
        ) ?>
    </section>
</aside>
