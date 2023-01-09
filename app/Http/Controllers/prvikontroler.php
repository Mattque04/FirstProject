<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prvikontroler extends Controller
{
    public function prvafunkcija(){
        return view('welcome');
    }
    public function drugafunkcija(){
        return view('Pocetna');
    }
}
