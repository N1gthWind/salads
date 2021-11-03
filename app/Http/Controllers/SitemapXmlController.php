<?php

namespace App\Http\Controllers;

use App\Models\Salad;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $salad = Salad::all();
        return response()->view('sitemap', [
            'posts' => $salad
        ])->header('Content-Type', 'text/xml');
      }
}
