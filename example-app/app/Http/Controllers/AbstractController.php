<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    public function run(Request $request){
        $this->before($request);

        $this->index($request);

        $this->after($request);
    }

    abstract function before(Request $request);

    abstract function index(Request $request);

    abstract function after(Request $request);
}
