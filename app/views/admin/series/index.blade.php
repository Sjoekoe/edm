@extends('admin.layouts.main')

@section('content')
<h1 class="page-header">Series Overview</h1>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
        </tr>
        </thead>
        <tbody>
        @foreach($series as $serie)
        <tr>
            <td>{{ $serie->name }}</td>
            <td>Ipsum</td>
            <td>Dolor</td>
            <td>Sit</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $series->links() }}
</div>

{{ link_to_route('series.create', 'Create a new Serie') }}
@stop