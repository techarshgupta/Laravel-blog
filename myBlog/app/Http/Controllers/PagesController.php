<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        $data = [
            'title' => 'Services',
            'services' => ['web', 'program', 'seo'],
        ];
        return view('pages.service')->with($data);
    }
}