<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user){
        // echo $user.'<br>';
        // echo "Hello from controllers";
        return ['name'=>$user, 'age'=>'27'];
    }
}
