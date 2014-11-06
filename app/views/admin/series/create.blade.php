@extends('admin.layouts.main')

@section('content')
    <h1 class="page-header">Create a new Serie</h1>

<div class="col-md-6">
    @include('partials.errors')
    {{ Form::open(['route' => 'series.store', 'files' => true]) }}
    <!-- Name Form input -->
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <!-- Image Form input -->
    <div class="form-group">
        {{ Form::label('image', 'Image:') }}
        {{ Form::file('image') }}
    </div>
    <!-- Text Form input -->
    <div class="form-group">
        {{ Form::label('text', 'Text:') }}
        {{ Form::textarea('text', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Create', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
</div>
@stop