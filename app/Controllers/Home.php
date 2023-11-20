<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()//: string
    {
        $data = [
            'page_title' => 'Betzul',
            'page_heading' => ''
        ];
        echo view('layouts/header', $data);
        echo view('welcome_message');
        echo view('layouts/footer');
    }
}
