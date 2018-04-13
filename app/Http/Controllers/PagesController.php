<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = [
            [
                'id' => 1,
                'content' => 'Este es el primer mensaje',
                'image' => 'http://lorempixel.com/600/338?1',
            ],
            [
                'id' => 2,
                'content' => 'Este es el segundo mensaje',
                'image' => 'http://lorempixel.com/600/338?12',
            ],
            [
                'id' => 3,
                'content' => 'Otro mensaje mas',
                'image' => 'http://lorempixel.com/600/338?3',
            ],
            [
                'id' => 4,
                'content' => 'El ultimo mensaje',
                'image' => 'http://lorempixel.com/600/338?4',
            ],
        ];    
    
        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
