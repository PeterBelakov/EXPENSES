@extends('layouts.master')

@section('content')

<h1>Expenses List</h1>
<p class="lead">Here's a list of all your tasks. <a href="{{ route('expenses.create') }}">Add a new one?</a></p>
<hr>

@stop