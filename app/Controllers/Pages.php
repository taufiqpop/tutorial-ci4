<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Pop Website'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. i saja dulu',
                    'kota' => 'Klaten'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Kenangan',
                    'kota' => 'Surakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
