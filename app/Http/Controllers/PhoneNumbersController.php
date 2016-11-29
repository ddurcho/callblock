<?php

namespace App\Http\Controllers;


use App\Number;
use Illuminate\Http\Request;


class PhoneNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        //
        
        $numbers = Number::all();
        
       // dd($number);
        
        return view('numbers.index', compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        //
        return view('numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        
        $this->validate($request, [
            'title' => 'required',
            'phone_number' => 'required|unique',
            'description' => 'required'
            ]);
            
            
        $number = new Number;
        //$number->title = $request->title;
        //$number->description = $request->description;
       // $number->phone_number = $request->phone_number;
        
       // $number->save();
       
        $number->create($request->all());
        
        return redirect()->to('/numbers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $number = Number::find($id);
        
        //return view('numbers.show')->with('number', $number);
        
        return view('numbers.edit', compact('number'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        
        $number = Number::find($id);
        $number->update($request->all());
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $number = Number::find($id)->delete();
        
        
        return back();
    }
}
