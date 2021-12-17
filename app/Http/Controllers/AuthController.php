<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119093,
            "Nama" => "Irfan Dwi Prasetyo",
            "Gender" => "Laki-laki",
            "Phone" => 6281225074328,
            "Class" => "XII RPL 3"
        ];
    }
}
