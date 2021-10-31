<?php

use Illuminate\Support\Facades\Route;

use splittlogic\bs5extras\Http\Controllers\t1Controller;

Route::get(
  'splittlogic/t1',
  [t1Controller::class, 'index']
)->name('splittlogic.t1');
