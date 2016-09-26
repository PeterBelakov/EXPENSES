@extends('layouts.master')

@section('content')

<h1>Expenses List</h1>
<p class="lead">Here's a list of all your expenses. <a href="{{ route('expenses.create') }}">Add a new one?</a></p>
<hr>
@foreach($expenses as $expens)
    <h3>{{ $expens->category }}</h3>
    <p>{{ $expens->description}}</p>
    <p>{{ $expens->amount}}</p>
    <p>
        <a href="{{ route('expenses.show', $expens->id) }}" class="btn btn-info">View Expenses</a>
        <a href="{{ route('expenses.edit', $expens->id) }}" class="btn btn-primary">Edit Expenses</a>
    </p>
    <hr>
@endforeach
@stop