<?php

namespace App\Http\Controllers;

use App\Models\LaraCrud;
use Illuminate\Http\Request;

class LaraCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud', [
            'crud' => LaraCrud::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required',
            'address' => 'required'
        ]);

        $laraCrud = new LaraCrud();
        $laraCrud->firstname = $request['firstname'];
        $laraCrud->lastname = $request['lastname'];
        $laraCrud->email = $request['email'];
        $laraCrud->address = $request['address'];
        $laraCrud->save();

        return redirect('/')->with('success', 'Record saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function show(LaraCrud $laraCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(LaraCrud $laraCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaraCrud $laraCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaraCrud $laraCrud)
    {
        //
    }
}