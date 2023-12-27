<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ForramsController extends Controller
{
    public function dashboard(){
        return view('fosrams/dashboard');
    }
    public function branchMaster(){
        return view('fosrams/branchMaster');
    }
    // branch Form
    public function branchForm(){

        $response = Http::get('https://fleet.jyothy.com/trip_app/states');
        if($response->successful()){

            $data = $response->json();
            $states = $data['states'];
            return view('fosrams/branchForm',compact('states'));
        }
        else{
            return view('fosrams/branchForm');
        }
    }
    // branch Edit
    public function branchEdit(){

        $response = Http::get('https://fleet.jyothy.com/trip_app/states');
        if($response->successful()){

            $data = $response->json();
            $states = $data['states'];
            return view('fosrams/branchEdit',compact('states'));
        }
        else{
            return view('fosrams/branchEdit');
        }
    }
    // branch View
    public function branchView(){
        
        return view('fosrams/branchView');
    }
}
