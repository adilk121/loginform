<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function view(){
        return view('/register');
    }

    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        $customer =new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];  
        $customer->dob=$request['dob'];  
        $customer->password=md5($request['password']);  
        $customer->city=$request['city'];
        $customer->mobile=$request['mobile'];
        $customer->macaddress=$request['macaddress'];   
        $customer->save();  
        
    }
}
