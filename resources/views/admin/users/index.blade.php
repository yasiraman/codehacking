@extends('layouts.admin')


@section('content')
    
    <h1>USER INDEX</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
            <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->role->name}} </td>
                <td> {{$user->is_active == 1 ? "Active" : "Not Active"}} </td>
                <td> {{$user->created_at->diffForHumans()}} </td>
                <td> {{$user->updated_at->diffForHumans()}} </td>
            </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop


@section('footer')
    
    <h6>Footer Here Boss</h6>
    
@stop
