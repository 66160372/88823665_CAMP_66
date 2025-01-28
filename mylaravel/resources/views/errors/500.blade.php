@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Oops! Something went wrong.'))

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            padding: 50px;
        }
        .error-box {
            font-size: 80px;
            color: white;
            background-color: #007bff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
        }
        h2 {
            font-size: 24px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #777;
        }
    </style>

    <div class="error-box">500</div>
    <h2>Oops! Something went wrong.</h2>
    <p>We encountered an unexpected error.</p>
    <a href="{{ url('/') }}">Go Back Home</a>
@endsection
