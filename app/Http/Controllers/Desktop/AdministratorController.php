<?php

namespace Market\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    //

      public function panel()
      {
         return view('administrator/panel');
      }

      public function access()
      {
         return view('administrator/access');
      }

      public function reports()
      {
         return view('administrator/reports');
      }


}
