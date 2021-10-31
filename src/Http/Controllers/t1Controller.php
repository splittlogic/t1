<?php

namespace splittlogic\t1\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\t1\t1;
use splittlogic\bs5extras\bs5extras;

class t1Controller extends Controller
{


  public function index ()
  {

    $x = new t1;

    $content = 'Template 1';

    return view('t1::blank',['content' => $content]);

  }


}
