<?php

namespace App\Http\Controllers;
use App\model\business\business;

//use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{

public function showRegisterForm(){

    return view('business.create');

}
public function register(Request $request){
$this->validation($request);
//return $request->all();
business::create($request->all());
//return redirect('business.create')->with('status', 'you are registered');
return $this->create();
}
public function showLoginForm(Request $request){
return view('business.login');
}
public function login(Request $request){

$this->validate($request, [
'email' => 'required|email',
'password' => 'required',
]);
if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
return 'loged in successfully';
}
return 'wrong';
}





public function validation(Request $request){

return $this->validate($request, [
'firstName' => 'required|string|max:255',
'lastName' => 'required|string|max:255',
'email' => 'required|string|email|max:255|unique:businesses',
'password' => 'required|string|confirmed|min:6',
'agreed' => 'string',
'spEmail' => 'string',
]);

}








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = business::all();
        //pr($companies);
      //return $companies;
       return view('business.company', compact('companies'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$msg = "you are registered";
//return view('business.company');
session()->flash('messege', 'created Successfully');
//return redirect('business.company');
//return redirect('business.company')->with('status', 'you are registered');
            return view('business.company');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pr($request);
        //return $request->all();


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
