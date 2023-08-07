<?php

namespace App\Http\Controllers;

use App\Events\TranslationEvent;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index($id)
    {
        return view('translation.index', ['id' => $id]);
    }

    public function send(Request $request, int $id)
    {
        broadcast(new TranslationEvent($id, $request->input('message')));
    }
}
