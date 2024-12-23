<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * トップページ　を表示する
     * 
     * @return \Illuminate\Views\View
     */
    public function index()
    {
        return view('welcome');
    }
}
