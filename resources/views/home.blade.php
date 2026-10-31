@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="card">
        <h1>Welcome to POS System!</h1>

        <p>
            Manage your customers and user accounts in one place.
        </p>

        <p>
            This Point of Sale (POS) application provides a simple
            way to view and manage account information.
        </p>

        <h3>Quick Navigation</h3>

        <ul>
            <li><a href="{{ route('customers') }}">View Customer Accounts</a></li>
            <li><a href="{{ route('users') }}">View User Accounts</a></li>
            <li><a href="{{ route('about') }}">Learn About Us</a></li>
        </ul>
    </div>

@endsection