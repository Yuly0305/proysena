<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Http\Requests\UserRequest;


class UserController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
     	$this->middleware('auth');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
    	$users = User::paginate(20);
    	return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('users.create');
    }

    /**
     * Store a newly created resource in stora<ge.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
    	/* dd($request->all());*/
    	$user = new User;
    	$user->fullname  = $request->fullname;
    	$user->email     = $request->email;
    	$user->phone     = $request->phone;
    	$user->birthdate = $request->birthdate;

    	if ($request->hasFile('photo')) {
    		$file= time().'.'.$request->photo->extension();
    		$request->photo->move(public_path('imgs'), $file);
    		$user->photo = 'imgs/'.$file;
    	}
    	$user->email_verified_at = now();
    	$user->password  = bcrypt($request['password']);
    	$user->remember_token = Str::random(10);

    	if ($user->save()) {
    		return redirect('users')->with('message', 'El administrador: '.$user->fullname.' fue adicionado con exito');
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
    	$user = User::findOrFail($id);
        //dd($user);
    	return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$user = User::findOrFail($id);
        // dd($user);
    	return view('users.edit')->with('user',$user);

    }

    public function update(UserRequest $request, $id)
    {
    	$user = new User;
    	$user->fullname  = $request->fullname;
    	$user->email     = $request->email;
    	$user->phone     = $request->phone;
    	$user->birthdate = $request->birthdate;

    	if ($request->hasFile('photo')) {
    		$file= time().'.'.$request->photo->extension();
    		$request->photo->move(public_path('imgs'), $file);
    		$user->photo = 'imgs/'.$file;
    	}
    	if ($user->save()) {
    		return redirect('users')->with('message','El administrador '.$user->fullname.' Fue modificado con éxito');
    	}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     */

    public function destroy($id)
    {
    	$user = User::find($id);
    	if ($user->delete()) {
    		return redirect('users')->with('message','El usuario '.$user->fullname.' Fue eliminado con Exito!');
    	}
    }

    // public function search(Request $request){
    //     // Scope
    // 	$users = User::names($request->q)->orderBy('id', 'ASC')->paginate(20);
    // 	return view('users.search')->with('users', $users);
    // }

    // public function pdf(){
    //     // dd('Descargar pdf');
    // 	$users = User::all();
    // 	$pdf   = \PDF::loadView('users.pdf', compact('users'));
    // 	return $pdf->download('allusers.pdf');
    // }

    // public function excel(){
    // 	return \Excel::download(new UserExport, 'allusers.xlsx');
    // }

    // public function import(Request $request){
    //     // $this->validate($request,[
    //     //     'file' => 'request|file|mimes:xls, xlsx'
    //     // ]);
    // 	$file = $request->file('file');
    // 	\Excel::import(new UsersImport, $file);
    // 	return redirect()->back()->with('message','Los usuarios se importaron con exito');


    // }
}

