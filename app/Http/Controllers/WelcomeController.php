<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class WelcomeController extends Controller
{
    public function home(){
//       if(isset($_SESSION['user'])) {
//           return view('home');
//       }
//        return view('login');
    $rezultat = DB::table('organisation')->get();
        print_r($rezultat);
        exit();
        return "cao";
    }

    public function profile($name, $surname, $id){
        $user=User::findOrFail($id);

        if(is_null($user)){
            abort();
        }
        return view('profile', compact('ime', 'prezime'));
    }

    public function rank(){
        return view('rank');
    }
}
