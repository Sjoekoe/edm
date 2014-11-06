@extends('admin.layouts.main')

@section('content')
<h1 class="page-header">Artists Overview</h1>

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
        @foreach($artists as $artist)
        <tr>
            <td>{{ $artist->name }}</td>
            <td>Ipsum</td>
            <td>Dolor</td>
            <td>Sit</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $artists->links() }}
</div>

{{ link_to_route('artist.create', 'Create an artist') }}
@stop