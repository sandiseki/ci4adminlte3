<?php namespace App\Controllers;

class Pages extends BaseController
{

	public function index()
	{
        
        $data1 = [
            'title'     =>  "AdminLTE 3 | Starter",
            'breadcumb' =>  "Starter Page"
        ];
        
        $data = array_merge($data1, $this->css, $this->js);
		return view('home', $data);
    }
    
}
