@extends('layouts.master')

@section('content')

<h1>Editing "{{ $expenses->category }}"</h1>
<p class="lead">Edit and save this task below, or <a href="{{ route('expenses.index') }}">go back to all tasks.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($expenses, [
    'method' => 'PATCH',
    'route' => ['expenses.update', $expenses->id]
]) !!}

<div class="form-group">
    {!! Form::label('category', 'Category:', ['class' => 'control-label']) !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('amount', 'Amount:', ['class' => 'control-label']) !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Expenses', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop