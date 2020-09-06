<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Writer;


class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::all()->toArray();
        return view('writer.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('writer.create');
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
            'job_title'=>'required',
            'address'=>'required'
        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone'=>$request->get('phone'),
            'job_title' => $request->get('job_title'),
            'address' => $request->get('address')
        ]);
        $contact->save();
        return redirect('/writer')->with('success', 'Contact Booked/Saved!');
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


     public function takedata()
    {
        //
       // $writer = Writer::all()->toArray();
      //  return view('writer.takedata', compact('writer'));
        return view('writer.takedata');
    }



       public function blog()
    {
        return view('writer.blog');
    }

      public function dashboard()
    {
        //
        return view('writer.dashboard');
    }


      public function blogpost()
    {
        //

        return view('userprofile.blogpost');
    }



}
