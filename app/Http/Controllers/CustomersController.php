<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers = [
            'Rap',
            'Joseph',
            'Alino',
        ];
        return view('internals.employees',
            ['customers'=> $customers,]);
    }
}
