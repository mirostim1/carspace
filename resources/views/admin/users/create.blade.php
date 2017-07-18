@extends('layouts.admin')

@section('content')

    <h1>Create New User</h1>
    <hr>
    <br>

    @include('includes.form_error')

    {!! Form::open(['method' => 'post', 'action' => 'AdminUsersController@store', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Enter Name*') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Enter Email*') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Enter Role*') !!}
        {!! Form::select('role_id', ['' => 'Choose option'] + $roles, null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active', 'Enter Status*') !!}
        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Upload photo') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('password', 'Enter Password*') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}

@stop