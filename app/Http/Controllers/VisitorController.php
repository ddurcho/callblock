<?php

namespace App\Http\Controllers;

use App\Number;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    //
    
    
    
    public function show($phone_number){
        
        
        //return number
        $number = Number::where('phone_number', $phone_number)->first();
        
        return view('numbers.show')->with('number', $number);
    }
}
