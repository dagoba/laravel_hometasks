<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function quoteRotator()
    {
        $quotes[] = 'Цитата №1';
        $quotes[] = 'Цитата №2';
        $quotes[] = 'Цитата №3';
        $quotes[] = 'Цитата №4';
        $quotes[] = 'Цитата №5';
        
        $random_number = rand(0,count($quotes)-1);
        $showquote = ($quotes[$random_number]);

        return \view('quotespage', compact('showquote'));
    }
}
