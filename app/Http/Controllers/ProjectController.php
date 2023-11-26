<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function projects() {
        $data = [
            [
                "name" => "Portfolio",
                "image" => "bootstrap5-plain-assets/images/blue-400-avatar.png",
                "description" => "HTML, CSS, JavaScript, Laravel",
                "link" => "#"
            ],
            [
                "name" => "e-Commerce",
                "image" => "bootstrap5-plain-assets/images/blue-400-avatar.png",
                "description" => "Laravel, HTML, CSS, JavaScript",
                "link" => "#"
            ],
            [
                "name" => "Inventory",
                "image" => "bootstrap5-plain-assets/images/blue-400-avatar.png",
                "description" => "Laravel, JavaScript, MySQL",
                "link" => "#"
            ]
        ];
        
        return view('pages.projects', ['data' =>$data]);
    }
}
