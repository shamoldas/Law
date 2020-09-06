<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all()->toArray();
        return view('userprofile.index', compact('users'));

       // return view('userprofile.index');
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
         $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required'
        ]);
        $user = new User([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email')
        ]);
        $user->save();
        return redirect()->route('userprofile')->with('success', 'Data Added');
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
        $user = User::find($id);
        return view('userprofile.edit', compact('user', 'id'));
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

         $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required'
        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('userprofile')->with('success', 'Data Updated');
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



     public function application()
    {
        //
        return view('userprofile.application');
    }

      public function profile()
    {
        //
        $users = User::all()->toArray();
        return view('userprofile.profile', compact('users'));

       // return view('userprofile.profile');
    }

      public function blogpost()
    {
        //

        return view('userprofile.blogpost');
    }
}
