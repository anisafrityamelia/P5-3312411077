<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListitemController extends Controller
{
    public function listitem()
    {
        return view('listitem'); // Menampilkan view listitem.blade.php
    }
}