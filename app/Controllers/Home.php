<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // echo "<h1>MEZIANE MAAMAR</h1>";
    }
}
