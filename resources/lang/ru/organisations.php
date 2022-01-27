<?php

return [
    'create'        => [
        'success'   => 'Организация ":name" создана.',
        'title'     => 'Новая организация',
    ],
    'destroy'       => [
        'success'   => 'Организация ":name" удалена.',
    ],
    'edit'          => [
        'success'   => 'Организация ":name" обновлена.',
        'title'     => 'Редактирование организации :name',
    ],
    'fields'        => [
        'image'         => 'Изображение',
        'location'      => 'Локация',
        'members'       => 'Члены',
        'name'          => 'Название',
        'organisation'  => 'Родительская организация',
        'organisations' => 'Подорганизации',
        'relation'      => 'Связь',
        'type'          => 'Тип',
    ],
    'helpers'       => [
        'descendants'   => 'Это список всех потомков этой организации, включая всех потомков ее потомков.',
        'nested_parent' => 'Показаны организации, входящие в :parent.',
        'nested_without'=> 'Показаны все организации, у которых нет родительских организаций. Нажмите на ряд организации, чтобы увидеть список ее подорганизаций.',
    ],
    'index'         => [
        'add'       => 'Новая организация',
        'header'    => 'Организации :name',
        'title'     => 'Организации',
    ],
    'members'       => [
        'actions'       => [
            'add'   => 'Добавить члена',
        ],
        'create'        => [
            'success'   => 'Член добавлен в организацию.',
            'title'     => 'Новый член организации :name',
        ],
        'destroy'       => [
            'success'   => 'Член удален из организации.',
        ],
        'edit'          => [
            'success'   => 'Член организации обновлен.',
            'title'     => 'Обновление члена :name',
        ],
        'fields'        => [
            'character'     => 'Персонаж',
            'organisation'  => 'Организация',
            'parent'        => 'Руководитель',
            'pinned'        => 'Закрепление',
            'role'          => 'Роль',
            'status'        => 'Статус активности',
        ],
        'helpers'       => [
            'all_members'   => 'Все персонажи, входящие в эту организацию или ее подорганизации.',
            'members'       => 'Все персонажи, входящие в эту организацию.',
            'pinned'        => 'Выберите, на страницах каких объектов следует закрепить это членство.',
        ],
        'pinned'        => [
            'both'          => 'Везде',
            'character'     => 'Персонаж',
            'none'          => 'Нигде',
            'organisation'  => 'Организация',
        ],
        'placeholders'  => [
            'character' => 'Выберите персонажа',
            'parent'    => 'Руководитель этого персонажа',
            'role'      => 'Лидер, член, верховный септон, шпион',
        ],
        'status'        => [
            'active'    => 'Активен',
            'inactive'  => 'Неактивен',
            'unknown'   => 'Статус неизвестен',
        ],
        'title'         => 'Члены организации :name',
    ],
    'organisations' => [
        'title' => 'Организации в организации :name',
    ],
    'placeholders'  => [
        'location'  => 'Выберите локацию',
        'name'      => 'Название организации',
        'type'      => 'Культ, банда, восстание, фэндом',
    ],
    'quests'        => [],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Организации',
            'quests'        => 'Квесты',
            'relations'     => 'Связи',
        ],
        'title' => 'Организация :name',
    ],
];
