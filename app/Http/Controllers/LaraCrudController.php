<?php

namespace App\Http\Controllers;

use App\Models\LaraCrud;
use Carbon\Carbon;
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
            'crud' => LaraCrud::paginate(5)
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
            'email' => 'required|email',
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
    public function show($id)
    {
        //
        return view('show', [
            'crud' => LaraCrud::findOrFail($id),
            'date' => Carbon::now()->subDays()->diffForHumans()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit', [
            'crud' => LaraCrud::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        $laraCrud = LaraCrud::findOrFail($id);
        $laraCrud->firstname = $request['firstname'];
        $laraCrud->lastname = $request['lastname'];
        $laraCrud->email = $request['email'];
        $laraCrud->address = $request['address'];

        $laraCrud->save();

        return redirect("/show/$id")->with('updated', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaraCrud  $laraCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laraCrud = LaraCrud::findOrFail($id);
        $laraCrud->delete();

        return redirect('/')->with('delete', 'Record Deleted');
    }
}