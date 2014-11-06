@extends('admin.layouts.main')

@section('content')
<h1 class="page-header">Create a new artist!</h1>

<div class="col-md-6">
    @include('partials.errors')
    {{ Form::open(['route' => 'artist.store']) }}
    <!-- Name Form input -->
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <!-- Website Form input -->
    <div class="form-group">
        {{ Form::label('website', 'Website:') }}
        {{ Form::text('website', null, ['class' => 'form-control']) }}
    </div>
    <!-- Label Form input -->
    <div class="form-group">
        {{ Form::label('label', 'Label:') }}
        {{ Form::text('label', null, ['class' => 'form-control']) }}
    </div>
    <!-- Promomail Form input -->
    <div class="form-group">
        {{ Form::label('promomail', 'Promomail:') }}
        {{ Form::email('promomail', null, ['class' => 'form-control']) }}
    </div>
    <!-- Bio Form input -->
    <div class="form-group">
        {{ Form::label('bio', 'Bio:') }}
        {{ Form::textarea('bio', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Create', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
</div>
@stop