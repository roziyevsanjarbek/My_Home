<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
      return  view('admin.payment-history');
    }

    public function late()
    {
        return  view('admin.late-payments');
    }
}
