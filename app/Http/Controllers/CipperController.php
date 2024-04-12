<?php

namespace App\Http\Controllers;

use App\Models\Cip;
use Illuminate\Http\Request;

class CipperController extends Controller
{
    public function index(){
        $cips = Cip::all();


        return view('home' , compact('cips'));
    }

    public function store(request $request){
        $cip = Cip::create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'read_time' => '1'
        ]);
        return redirect(route('home'));
    }
}
