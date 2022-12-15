<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\Models\User;

class ConnectController extends Controller
{
     public function __construct()
     {
        $this->middleware('guest')->except(['logout']);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('connect.login');
        }
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->with('message','Error de validación')->with('type-alert','danger');
        }else{
            if (Auth::attempt(['email' =>$request->input('email'), 'password' => $request->input('password')],true)
                || Auth::attempt(['username' =>$request->input('email'), 'password' => $request->input('password')],true)) {
                if (Auth::user()->role == '1') {
                    return redirect('admin');
                }else{
                    return redirect('/');
                }
            } else {
                return back()->with('message','Error de validación')->with('type-alert','danger');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('connect.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Validation error:')->with('type-alert','danger');
        }else{
            $user = new User;
            $user->name = e($request->input('name'));
            $user->surname = e($request->input('surname'));
            $user->username = e($request->input('username'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()){
                return redirect('login')->with('message','Usuario creado con éxito')->with('type-alert','success');
            }
        }
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
        return view('connect.recover');
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
