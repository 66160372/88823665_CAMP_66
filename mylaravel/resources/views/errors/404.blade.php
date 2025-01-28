@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Oops! Page not found'))

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            padding: 50px;
        }
        h1 {
            font-size: 80px;
            color: #ffc107;
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

    <h1>404</h1>
    <h2>Oops! Page not found</h2>
    <p>We couldn't find the page you're looking for.</p>
    <a href="{{ url('/') }}">Go Back Home</a>
@endsection
