<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExpensesController extends Controller
{
 public function index()
{
    return view('expenses.index');
} //
 public function create()
{
    return view('expenses.create');
} //
}
