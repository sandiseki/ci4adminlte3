<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $css = ["2","1"
    ];
        $js = ["2","1"
    ];
        $element = [
            'title' => 'Menu | Name Site',
            'css1'   => '1',
        ];

        $data = array_merge($css,$element,$js);
        // echo view('layout/home', $data);
        // echo $css;

		return view('home', $data);
	}

}
