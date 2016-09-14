@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead"></p>
<hr>

<a href="{{ route('expenses.index') }}" class="btn btn-info">View Expenses</a>
<a href="{{ route('expenses.create') }}" class="btn btn-primary">Add New Expenses</a>

@stop