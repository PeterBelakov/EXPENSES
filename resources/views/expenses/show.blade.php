
@extends('layouts.master')

@section('content')
<main>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        
        @yield('content')
    </div>
</main>
<h1>{{ $expenses->category }}</h1>
<p class="lead">{{ $expenses->description }}</p>
<p class="lead">{{ $expenses->amount }}</p>
<hr>

<a href="{{ route('expenses.index') }}" class="btn btn-info">Back to all expenses</a>
<a href="{{ route('expenses.edit', $expenses->id) }}" class="btn btn-primary">Edit Expens</a>
<div class="pull-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['expenses.destroy', $expenses->id]
        ]) !!}
            {!! Form::submit('Delete this expens', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
<!--<div class="pull-right">
    <a href="{{ route('expenses.destroy', $expenses->id) }}" class="btn btn-danger">Delete this expens</a>
</div>-->

@stop