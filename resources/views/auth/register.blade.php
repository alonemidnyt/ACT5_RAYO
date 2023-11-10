<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="registration-container">
        <h2>Registration</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="personalDetails">Personal Details:</label>
            <input type="text" id="personalDetails" name="personalDetails" required>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection
