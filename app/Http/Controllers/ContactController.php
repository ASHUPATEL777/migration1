<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\contactmodel;
use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
     return view('temp/contact');   
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

        // echo "<pre>";
        // print_r($request->all());
        $request->validate(['Name'=>'required','Email'=>'required','Phone'=>'required','Message'=>'required']);
        // return redirect('/Contact-us')->with('status','all filed are required');

        $contacts=new contactmodel;
        $contacts->name=$request['Name'];
        $contacts->email=$request['Email'];
        $contacts->phone=$request['Phone'];
        $contacts->message=$request['Message'];
        $contacts->save();
       return  redirect('/Contact-us')->with('Insert','Insert record successfully');   
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
}