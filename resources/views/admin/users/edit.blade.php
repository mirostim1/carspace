@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>
    <hr>
    <br>

    @include('includes.form_error')

    <div class="row">
        <div class="col-md-3">
            <img src="{{ $user->photo ? $user->photo->path : '/images/nophoto.gif' }}" class="img-responsive img-rounded" />
        </div>

        <div class="col-md-9">

            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
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
                {!! Form::select('role_id', $roles, null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Enter Status*') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], $user->is_active, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Upload photo') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('password', 'Enter Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@stop