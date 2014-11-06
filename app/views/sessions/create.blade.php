@extends('layouts.main')

@section('content')
<div class="piece piece-dark signup-banner">
    <div class="container">
        <h2 class="text-center">Welcome back! <br/> Ready to continue your learning? </h2>
    </div>
</div>

<div class="piece piece-light">
    <div class="container wrap">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 content">
                {{ Form::open(['route' => 'sessions.store']) }}
                <div class="row">
                    @include('partials.errors')
                </div>
                <!-- Email Form input -->
                <div class="form-group row">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- Password Form input -->
                <div class="form-group row">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <div class="form-group row">
                    {{ Form::submit('Log in', ['class' => 'btn btn-custom pull-right']) }}

                    {{ link_to('/password/remind', 'Forgot your password?') }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop