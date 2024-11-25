<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuyProfileController extends Controller
{
    public function display()
    {
        return "<h1> Named Route Controller";
    }
    public function show()
    {
        return redirect()->route('display.profile');
    }
}

#Route::get('/named/display',
          #  [DuyProfileController::class, 'display']
           # )->name('display.profile');

#Route::get('/named/show',[DuyProfileController::class, 'show']);
