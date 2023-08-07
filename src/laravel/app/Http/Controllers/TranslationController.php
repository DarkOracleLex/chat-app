<?php

namespace App\Http\Controllers;

class TranslationController extends Controller
{
    public function index($id)
    {
        return view('translation.index', ['id' => $id]);
    }
}
