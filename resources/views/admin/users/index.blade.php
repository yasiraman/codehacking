@extends('layouts.admin')


@section('content')
    
    @if(Session::has('deleted_user'))
        
        <p class="alert-danger">{{session('deleted_user')}}</p>
        
    @endif   
    
    <h1>USER INDEX</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> <img src="{{$user->photo ? $user->photo->file : '/images/blank-avatar.png'}}" alt="" style="border-radius: 50px; height: 50px; width: 50px" ></td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->role->name}} </td>
                        <td> {{$user->is_active == 1 ? "Active" : "Not Active"}} </td>
                        <td> {{$user->created_at->diffForHumans()}} </td>
                        <td> {{$user->updated_at->diffForHumans()}} </td>
                        <td> <a href=" {{ route('users.edit', $user->id) }}" class="btn btn-primary ">Edit</a> </td>
                        <td> 
                           {{ Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy',$user->id]]) }}
                                <div class="form-group">
                                    
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    
                                </div>
                            {!! Form::close() !!} 
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop


@section('footer')
    
    <h6>Footer Here Boss</h6>
    
@stop
