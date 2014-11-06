@extends('layouts.main')

@section('content')
<div class="piece piece-dark signup-banner">
    <div class="container">
        <h2 class="text-center">Need to reset your password ?</h2>
    </div>
</div>

<div class="piece piece-light">
    <div class="container wrap">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {{ Form::open() }}
                <!-- Email Form input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Reset password', ['class' => 'btn btn-primary form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop