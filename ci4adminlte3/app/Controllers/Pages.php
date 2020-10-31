<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
    
    
        $data = [
            'title'     =>  "AdminLTE 3 | Dashboard",
            'css'       =>  ['assets/css/adminlte.css',
                            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
                            'assets/plugins/fontawesome-free/css/all.min.css' ],
            'js'        =>  ['assets/plugins/jquery/jquery.min.js',
                            'assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
                            'assets/js/adminlte.min.js'],
            'breadcumb' =>  ['1'],
        
        ];


        echo view('home', $data);
		// return view('home', $data);
	}

}
