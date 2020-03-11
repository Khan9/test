<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'welcome to the jungle';
        $title1 = 'new title';
        return view('pages/index', compact('title', 'title1'));
    }

    public function about(){
        return view('pages/about');
    }

    public function services(){
            $data = array(
                'title' => "services",
                'services' => ['Web', 'prograaming', 'SEE']
            );
        return view('pages/services')-> with($data);

}
}
