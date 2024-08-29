<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use App\Models\Partner;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $mainPage = MainPage::all();

        $aboutUs = $mainPage->where('tag', 'about')->first();
        $contactUs = $mainPage->where('tag', 'contact-us')->first();
        $aboutUsImage = $mainPage->where('tag', 'about-us-image')->first();
        $aboutUsTitle = $mainPage->where('tag', 'about-us-title')->first();

        $partners = Partner::query()->select('title', 'image', 'link')->get();

        return view('index', compact('aboutUs', 'contactUs', 'aboutUsImage', 'aboutUsTitle', 'partners'));
    }
}
