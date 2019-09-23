<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function update_email(User $user, Request $request)
    {
      $user->update(['email' => $request->email]);
      return redirect()->route('admin.main');
    }
}
