<?php

return [

'astacore' => [
    'version' => '0.0.1',
    'template' => [
        'path'=>'views',
        'active'=>[
            'matrix'=> true,
            'adminlte'=> false
            ],
    ],
    'modules' => [
        'procms'=>true,
        'procrm'=>true,
        ],
    ],
    'menu' => [
    [
        'label' => 'ProCMS',
        'url' => 'javascript:void();',
        'icon' => 'mdi mdi-receipt',
        'children' => [
            [
                'label' => 'Dashboard',
                'url' => '/procms',
                'icon' => 'mdi mdi-note-dashboard',
                'children' => []
            ],
            [
                'label' => 'Blog',
                'url' => '/procms/blog',
                'icon' => 'mdi mdi-note-file',
                'children' => []
            ],
            [
                'label' => 'Galerias',
                'url' => '/procms/galerias',
                'icon' => 'mdi mdi-note-image',
                'children' => []
            ],
            [
                'label' => 'Paginas',
                'url' => '/procms/paginas',
                'icon' => 'mdi mdi-note-edit',
                'children' => []
            ],
            [
                'label' => 'Configurar',
                'url' => '/procms/configurar',
                'icon' => 'mdi mdi-note-outline',
                'children' => []
            ],
        ]
    ],
    [
        'label' => 'Páginas',
        'url' => '/paginas',
        'icon' => 'pages.png',
        'children' => [
            [
                'label' => 'Criar Página',
                'url' => '/paginas/criar',
                'icon' => 'create.png',
                'children' => []
            ],
            [
                'label' => 'Editar Página',
                'url' => '/paginas/editar',
                'icon' => 'edit.png',
                'children' => []
            ],
            [
                'label' => 'Excluir Página',
                'url' => '/paginas/excluir',
                'icon' => 'delete.png',
                'children' => []
            ]
        ]
    ],
    // Outros itens de menu...
],


];
