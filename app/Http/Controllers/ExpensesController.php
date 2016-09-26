<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expenses;
use Session;

class ExpensesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $expenses = Expenses::all();

        return view('expenses.index')->withExpenses($expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'category' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Expenses::create($input);

        Session::flash('flash_message', 'Expenses successfully added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $expenses = Expenses::findOrFail($id);

        return view('expenses.show')->withExpenses($expenses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $expenses = Expenses::findOrFail($id);

        return view('Expenses.edit')->withExpenses($expenses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $expenses = Expenses::findOrFail($id);

        $this->validate($request, [
            'category' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required'
        ]);

        $input = $request->all();

        $expenses->fill($input)->save();

        Session::flash('flash_message', 'Expenses successfully added!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $expenses = Expenses::findOrFail($id);

    $expenses->delete();

    Session::flash('flash_message', 'Expenses successfully deleted!');

    return redirect()->route('expenses.index');
    }

}
