@extends('admin.layouts.main')

@section('content')
    <h1 class="page-header">Users Overview</h1>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>{{ sort_by('id', 'ID') }}</th>
            <th>{{ sort_by('username', 'Name') }}</th>
            <th>{{ sort_by('email', 'Email') }}</th>
            <th>{{ sort_by('stripe_plan', 'Plan') }}</th>
            <th>{{ sort_by('stripe_active' ,'Active') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->stripe_plan }}</td>
            <td>{{ $user->stripe_active == 1 ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->appends(Request::except(['page']))->links() }}
</div>

@stop

