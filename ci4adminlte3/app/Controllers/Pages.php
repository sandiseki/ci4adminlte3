<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
    
        $data = [
            'title' =>  "Menu | Name Site",
            'css'   =>  ['assets/css/adminlte.css','https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
                            'assets/plugins/fontawesome-free/css/all.min.css' ],
            'js'    =>  ['3','4'],
        ];

        // $data = array_merge($css,$element,$js);
        // echo view('layout/home', $data);
        // echo $css;
        echo view('home', $data);
		// return view('home', $data);
	}

}
