@extends('layouts.admin')


@section('content')
    
   <h1>POST INDEX</h1>
   
   <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td> {{$post->id}} </td>
                        <td> <img src="{{$post->photo ? $post->photo->file : '/images/noimage.png'}}" alt="" style="border-radius: 5px; height: 50px; width: 60px" > </td>
                        <td> {{$post->user->name}} </td>
                        <td> {{$post->category ? $post->category->name : "Uncategorized" }} </td>
                        <td> {{$post->title}} </td>
                        <td> {{$post->body}} </td>
                        <td> {{$post->created_at->diffForHumans()}} </td>
                        <td> {{$post->updated_at->diffForHumans()}} </td>
                        <td> <a href=" {{ route('posts.edit', $post->id) }}" class="btn btn-primary ">Edit</a> </td>
{{--
                        <td> 
                           {{ Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$user->id]]) }}
                                <div class="form-group">
                                    
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    
                                </div>
                            {!! Form::close() !!} 
                        </td>
--}}
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    
@stop

@extends('layouts.footer')