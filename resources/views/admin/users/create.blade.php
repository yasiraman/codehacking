@extends('layouts.admin')


@section('content')
    
    <h1>USERS--->>> CREATE USER</h1>
    
    @include('includes.form_errors')
    {{ Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store', 'files'=>'true']) }}
        
        <div class="form-group">
           
            {{ Form::label('name', 'Name :') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('email', 'E-Mail :') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('is_active', 'Status :') }}
            {{ Form::select('is_active', array( 0 => 'Not Active', 1 => 'Active'), 0, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('role_id', 'Role :') }}
            {{ Form::select('role_id', array('' => 'Select One') + $roles, null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('photo_id', 'Image :') }}
            {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('password', 'Password :') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
            
        </div>
    {!! Form::close() !!}
    
    
@stop


@section('footer')
    
    <h6>Footer Here Boss</h6>
    
@stop