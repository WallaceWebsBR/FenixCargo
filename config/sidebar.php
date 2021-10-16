<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
  'menu' => [
      [
		'icon' => 'fa fa-th-large',
		'title' => 'Gerenciadores',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Inventário'
		]]
        ],[
        'icon' => 'fa fa-th-large',
        'title' => 'Cadastros',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => 'javascript:;',
            'title' => 'Cadastrar Clientes'
        ],[
            'url' => 'javascript:;',
            'title' => 'Cadastrar Transportadora'
        ]]
        ]

    ]
];
