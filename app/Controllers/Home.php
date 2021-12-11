<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home  | Praktikum 5'
        ];

        return view('pages/home', $data);
    }
}
