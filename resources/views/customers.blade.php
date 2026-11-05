@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')

    <div class="card">
        <h1>Customer Accounts</h1>

        <p>List of registered customers in the POS System.</p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No customers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection