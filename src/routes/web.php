<?php

use Illuminate\Support\Facades\Route;

use splittlogic\t1\Http\Controllers\t1Controller;

Route::get(
  'splittlogic/t1',
  [t1Controller::class, 'index']
)->name('splittlogic.t1');
