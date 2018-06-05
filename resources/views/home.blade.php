@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                @if(Auth::check())
                    @if(Auth::user()->isAdmin())
                        <div class="align-middle">
                            <a class="btn btn-primary" href="{{ route('admin.index') }}">Goto Admin</a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
