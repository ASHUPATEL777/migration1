<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\accountmodel;
use Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['countrys']=DB::table('countrys')->get();
        return view('temp/account',$data);
    }
    public function getstate(Request $request){
        $cid=$request->post('cid');
        $state=DB::table('states')->where('countrys'.$cid)->get();
        $html='<option value="">Select State</option> ';
        foreach($state as $list){
$html.='<option value="'.$list->id.'">'.$list->state.'</option>';
       }
       echo $html;
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
        $request->validate(['name'=>'required','phone'=>'required','email'=>'required','passward'=>'required','state'=>'required','city'=>'required','message'=>'required']);
        
        $registers=new accountmodel;
        $registers->name=$request['name'];
        $registers->phone=$request['phone'];
        $registers->email=$request['email'];
        $registers->passward=$request['passward'];
        $registers->state=$request['state'];
        $registers->city=$request['city'];
        $registers->message=$request['message'];
        $registers->save();
       return  redirect('/');
        

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