<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    function addUser(Request $req){
        $req->session()->flash('msg','user added successfully');
        
        
        $req->validate([
            'username'=>'required | min:3 |max:20',
            'email'=>'required | email | lowercase',
            'job'=>'required | max:50',
            'skill'=>'required',
        ],[
           'username.required'=>'username can not be empty',
           'username.min'=>'username should be atleast 3 characters',
           'username.min'=>'username should be not more than 20 characters',
           'email.email'=>'email not valid'
        ]);
        return redirect('user-form');
        //echo "Hello";
        //echo "User added successfully";
        //echo "<br>";
        //return $req;
        //echo "User name is $req->username";
        //echo "<br>";
       // echo "User email is $req->email";
        //echo "<br>";
        //echo "User job is $req->job";
       // echo "<br>";
       // echo "User age is $req->age";
       // echo "<br>";
       // echo "User skill is ";
       // print_r($req->skill);
        //echo "ip is ". $req->ip();
        
        

    }
    
}
?>
