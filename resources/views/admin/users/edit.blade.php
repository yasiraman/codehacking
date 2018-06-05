@extends('layouts.admin')


@section('content')
    
    <h1>USERS--->>> EDIT USER</h1>
    
    @include('includes.form_errors')
    {{ Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>'true']) }}
        
        <div class="form-group">
           
            {{ Form::label('name', 'Name :') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('email', 'E-Mail :') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('role_id', 'Role :') }}
            {{ Form::select('role_id',array(''=>'Select One') + $roles, null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('is_active', 'Status :') }}
            {{ Form::select('is_active', array( 0 => 'Not Active', 1 => 'Active'), null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            <img src="{{$user->photo ? $user->photo->file : '/images/blank-avatar.png'}}" alt="" style="border-radius: 50px; height: 50px; width: 50px" ><br>
            {{ Form::label('photo_id', 'Change Image :') }}
            {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('password', 'Password :') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
            
        </div>
    {!! Form::close() !!}
    
    
@stop


@section('footer')
    
    <h6>Footer Here Boss</h6>
    
@stop