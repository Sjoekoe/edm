@extends('layouts.main')

@section('content')

@include('users.partials.banner-profile')
<div class="piece piece-light">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            @include('partials.errors')
            {{ Form::model($user, ['method' => 'PUT', 'route' => ['profiles.update', $user->username]]) }}

            <!-- Username Form input -->
            <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
            </div>

            <!-- Email Form input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

            <!-- Location Form input -->
            <div class="form-group">
                {{ Form::label('location', 'Location:') }}
                {{ Form::text('location', $user->profile->location, ['class' => 'form-control']) }}
            </div>

            <!-- Twitter Form input -->
            <div class="form-group">
                {{ Form::label('twitter', 'Twitter username:') }}
                {{ Form::text('twitter', $user->profile->twitter, ['class' => 'form-control']) }}
            </div>

            <!-- Soundcloud Form input -->
            <div class="form-group">
                {{ Form::label('soundcloud', 'Soundcloud username:') }}
                {{ Form::text('soundcloud', $user->profile->soundcloud, ['class' => 'form-control']) }}
            </div>

            <!-- Website Form input -->
            <div class="form-group">
                {{ Form::label('website', 'Website:') }}
                {{ Form::text('website', $user->profile->website, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>


@stop