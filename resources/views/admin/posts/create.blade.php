@extends('layouts.admin')


@section('content')
    
   <h1>POSTS--->>> CREATE POST</h1>
   
    @include('includes.form_errors')
    {{ Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) }}
       
       <div class="form-group">
          
           {{ Form::label('title', 'Title:') }}
           {{ Form::text('title', null, ['class' => 'form-control']) }}
           
        </div>
        <div class="form-group">
            
            {{ Form::label('category_id', 'Category :') }}
            {{ Form::select('category_id', array(''=>'Select One', 1=>'PHP', 2=>'JAVA'), null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('photo_id', 'Photo :') }}
            {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="form-group">
            
            {{ Form::label('body', 'Content :') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            
        </div>
        
        <div class="form-group">
           
           {!! Form::submit('Post', ['class' => 'btn btn-primary']) !!}
           
        </div>
    {!! Form::close() !!}
    
@stop

@extends('layouts.footer')
