<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $data['events'] = Event::all();
        return view("user.home",$data);
    }

    public function allEvents(){
        $data['events'] = Event::all();
        return view("user.allEvents",$data);
    }

    public function viewEvent($id){
        $data['events'] = Event::find($id);
        return view("user.viewEvents",$data);
    }

    
}
