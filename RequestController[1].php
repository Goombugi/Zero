<?php

namespace App\Http\Controllers;
use App\request;
//use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$requests = Requests::all();
        //$title = 'Welcome to Zero';
        $request = request::orderBy('name','asc')->get();
        //$request = request::where('name','')->get;
        //pagination
        //$request = request::orderBy('name','asc')->paginate(1);
        return view('requests.index')->with('request',$reqest);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Here you can request';
        return view('requests.create')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
      $request = request::find($id);
      return view('requests.show')->with('request',$request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = 'Update your request!';
        return view('requests.update')->with('title',$title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
