<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skills;
use App\User;
use Illuminate\Http\JsonResponse;

class RegisterEmployedController extends Controller
{
    //
    public function index()
    {
        //
        $data = User::all();
dd($data);
        return response($data, 200);
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
        $validator = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'publish_at' => 'nullable|date',
        ]);

        if ($validator->fails())
        {
            // It failed
            return response('Data input failed', 400);
        }

        $user = new User();
        dd($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pisition = $request->birthdate;
        $user->address = $request->address;



        if($user->save()){
            return response('Success', 200);
        }else{
            return response('Error', 400);
        }

    }

    public function Skills(Request $request, $id){
        $skil = new skills();
        $skil->name = $request->skill_name;
        $skil->quialification = $request->qualification;
        $skil->user_id = $id;

        return response('Success', 200);
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
        $user = User::where('id',$id)->first();
        //dd($user);
        if($user){
            return response($user, 200);
        }else{
            return response('Error', 400);
        }

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
