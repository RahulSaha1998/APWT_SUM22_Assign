<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supports\Facades\mail;

class emailController extends Controller
{
    //

    Mail::to(['Sub','body'])->SentEmail('','');
}
