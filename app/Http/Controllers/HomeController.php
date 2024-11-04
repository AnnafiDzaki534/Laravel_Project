<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); // ini merujuk ke halaman welcome 

    }

    public function login(){
        return view('login'); // ini merujuk ke halaman login

    }

    public function about(){
        $data = [
            'name'      => 'Annafi Dzaki Zuliant',
            'address'   => 'Banyuams',
            'email'     => '541231017@student.smktelkom-pwt.sch.id',
            ];
       
        return view('about', $data); // ini merujuk ke halaman about

    }
}
