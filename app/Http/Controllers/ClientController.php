<?php

namespace App\Http\Controllers;

use App\Models\client_footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function contact()
    {
        return view('client.contact');
    }
    public function news()
    {
        return view('client.news');
    }
    public function service()
    {
        return view('client.service');
    }
    public function client_footer()
    {
        $footers = client_footer::table('client_footer')->all();
        return view('client.index', compact('footers'));
    }
    public function about()
    {
        return view('client.about');
    }
        public function mainnews()
    {
        return view('client.mainnews');
    }
}