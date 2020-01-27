<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function homePage() {

        $videogames = DB::select("SELECT * FROM videogame");

        return view('home.tpl.php', ['videogames' => $videogames]);

     }
    


}
