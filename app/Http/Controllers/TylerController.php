<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TylerController extends Controller
{
    public function showList(){
        return view('tyler');
    }

    public function para($id='Cassio')
    {
        return 'Your ID Is: '.$id;
    }

    public function reurl() {
        return redirect('/posts');
    }
}
