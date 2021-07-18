<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
  public function index()
  {
      $books = DB::select('select * from books');
      return $books;
  }
}
