@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <h1>Reset your password</h1>

        <div class="col-md-6">
            {{ Form::open() }}
            {{ Form::hidden('token', $token) }}
            <!-- Email Form input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            <!-- Password Form input -->
            <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
            </div>
            <!-- Password_confirmation Form input -->
            <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('reset', ['class' => 'btn btn-primary form-control']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
@stop