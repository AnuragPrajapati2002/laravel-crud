<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user::all();
        return view('/list',['data'=>$data]);
    }

    public function test()
    {
        $final_array = array();
        $my_str = "Hello, Developer. My Name Is Anurag And I Am PHP Developer Working In Mypcot Infotect Pvt Ltd. Today I Will Be Teaching Everyone About PHP Language And Its Functionality. There Are Some Advantages To Use PHP. I Will Be Covering Some Of Them Today";

        echo "<pre>";
        print_r($my_str);
        echo "</pre>";

        $my_str = str_replace(['.',','],'',$my_str);
        $final_array=explode(" ",$my_str);
        $final_array=array_count_values($final_array);

        echo "<pre>";
        print_r($final_array);
        echo "</pre>";die('Debug');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'surname' => 'required'
        ]);
        $user = new user;
        $user->name = $req->name;
        $user->surname = $req->surname;
        $user->save();
        return redirect('list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = user::find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $data = user::find($req->id);
        $data->name = $req->name;
        $data->surname =$req->surname;
        $data->save();
        return redirect('list');
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
        $data = user::find($id);
        $data->delete();
        return redirect('list');
    }

    public function aggregate()
    {
        return user::all()->sum('id');
    }

    public function joins()
    {
        return DB::table('users')
        ->join('employees','users.id','=','employees.user_id')
        ->get();

    }
    function display()
    {
        $ser = new service;
        $ser->name="Arjun";
        $ser->surname="Singh";
        $ser->service="Majdoori";
        $ser->save();
    }
    function relation()
    {
        return user::with('relation')->where('id',1)->get();
    }
}
