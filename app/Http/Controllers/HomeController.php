<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $members = Member::all();
        $compt = 0;
        return view('home',compact('members','compt'));
    }
}
