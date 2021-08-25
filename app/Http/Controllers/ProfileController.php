<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function store (Request $request){   
    if ($request->method()=="POST"){
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'dob' => 'required'
        ]);
        $user = User::factory()->create();

        $profiles = new Profile();
        $profiles->first_name = $request->get("first_name");
        $profiles->last_name = $request->get("last_name");
        $profiles->email = $request->get("email");
        $profiles->dob = $request->get("dob");
        $profiles->user_id = $user->id;
        $profiles->save();
    };
        return view('crud');
    }

    
    public function index(){
        $profile= Profile::all();
        return view('prof', ['profile'=>$profile]);
    }
    

    public function update(Request $request, profile $profile){
        if ($request->has('save_btn')){
            if ($request->method()=="POST"){
                $validateData = $request->validate([
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required|email',
                    'dob' => 'required'
                ]);
                $profile->first_name = $request->get("first_name");
                $profile->last_name = $request->get("last_name");
                $profile->email = $request->get("email");
                $profile->dob = $request->get("dob");
                $profile->save();
                return redirect('/');
            };
        } 
        elseif ($request->has('cancel_btn')){
            return redirect('/');
        };
        return view('update', ['profile'=>$profile]);
    }
    
}
