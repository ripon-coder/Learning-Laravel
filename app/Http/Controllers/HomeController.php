<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::firstOrFail();

        $user->others = ["id"=>5,"name"=> "Ripon Shikder","number"=>[
            "airtel"=>"01679003918",
            "gp"=> "01732628761",
        ]];
        //$user->save();
        return is_array($user->others);
    }
}
