<?php

namespace App\Http\Controllers\Front;

use App\Models\Settinge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingeController extends Controller
{
    public function index(){
        $data['settings'] = Settinge::first();
        return view('front.contact.index')->with($data);
    }
}
