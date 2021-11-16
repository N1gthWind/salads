<?php

namespace App\Http\Controllers;

use App\Models\Salad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SitemapXmlController extends Controller
{
    public function index()
    {
        $site = App::make('sitemap');

        $salads = Salad::all();
        $images = [];

        foreach ($salads as $salad) {
            $site->add(URL::to('/products/' . $salad->salad_id . '/edit'), date("Y-m-d h:i:s"), 1, 'daily');
            array_push($images, ['url' => URL::to("images/$salad->image_path"), 'title' => "$salad->name"]);
        }
        $site->add(URL::to('/'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/login'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/register'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/products'), date("Y-m-d h:i:s"), 1, 'daily',$images);     
        $site->add(URL::to('/password/reset'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/email/verify'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/logout'), date("Y-m-d h:i:s"), 1, 'daily');
        $site->add(URL::to('/products/create'), date("Y-m-d h:i:s"), 1, 'daily');
        
        $site->store('xml', 'sitemap');
        return redirect(asset('sitemap.xml'));
    }
}
