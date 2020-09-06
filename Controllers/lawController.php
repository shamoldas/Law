<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

use App\Contact;

class lawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('law.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $contactus = new Contactus([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject'=>$request->get('subject'),
            'message' => $request->get('message')
        ]);
        $contactus->save();
        return redirect('/law')->with('success', 'Contact Soon!');
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
    }


    public function contactus()
    {
        return view('law.contactus');
    }



      public function aboutme()
    {
        return view('law.aboutme');
    }

      public function ourteam()
    {
        return view('law.ourteam');
    }

      public function appointment()
    {
        return view('law.appointment');
    }

      public function practices()
    {
        return view('law.practices');
    }
       public function blog()
    {
        return view('law.blog');
    }

}
