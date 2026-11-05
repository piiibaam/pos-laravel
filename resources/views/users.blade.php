@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')

    <div class="card">
        <h1>User Accounts</h1>

        <p>List of registered users in the POS System.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection