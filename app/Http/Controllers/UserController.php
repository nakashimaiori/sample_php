<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
  public function index()
    {
        // $items = User::all();
        // return view('user.index', ['items' => $items]); // ビューの描画
        // // return $items->toArray(); // JSONデータで描画
    }
}
