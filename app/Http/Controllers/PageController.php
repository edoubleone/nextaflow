<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

      public function contact()
    {
        return view('contact');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function pricing(\App\Services\GhlService $ghlService)
    {
        $products = $ghlService->getProducts();
        return view('pricing', compact('products'));
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function security()
    {
        return view('security');
    }

    public function terms()
    {
        return view('term');
    }
}
