<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
   public function feedback(Request $request)
    {
           return json_encode(['success' => true]);
    }
}
