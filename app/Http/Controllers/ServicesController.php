<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServicesController extends Controller

{
    public function index()
    {
        // Retorna a view chamada "services"
        return view('services.index');
    }
}