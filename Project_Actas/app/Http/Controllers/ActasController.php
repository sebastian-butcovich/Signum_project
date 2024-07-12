<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Actas;

class ActasController extends Controller
{
    //
    public function index()
    {
        return Actas::all();
    }
}
