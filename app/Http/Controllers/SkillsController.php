<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    function skills() {

        $data = [
            [
                "name" => "Laravel",
                "rate" => "70"
            ],[
                "name" => "PHP",
                "rate" => "75"
            ],
            [
                "name" => "JavaScript",
                "rate" => "60"
            ],
            [
                "name" => "CSS",
                "rate" => "50"
            ],[
                "name" => "HTML",
                "rate" => "80"
            ]
        ];

        return view('pages.about', ['data' => $data]);
    }
}
