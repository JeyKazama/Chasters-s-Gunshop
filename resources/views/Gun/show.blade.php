@extends('layouts.app')

@section('content')

<style>
    .detail-container {
        max-width: 600px;
        margin: 60px auto;
        background-color: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }

    .detail-container h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }

    .detail-container p {
        font-size: 16px;
        line-height: 1.6;
        border-bottom: 1px solid #444;
        padding: 10px 0;
    }

    .back-link {
        display: block;
        margin-top: 25px;
        text-align: center;
        background-color: #007bff;
        padding: 10px 20px;
        text-decoration: none;
        color: white;
        border-radius: 6px;
        width: 150px;
        margin-left: auto;
        margin-right: auto;
    }

    .back-link:hover {
        background-color: #0056b3;
    }
</style>

<div class="detail-container">
    <h1>Handgun Detail</h1>

    <p><strong>Name:</strong> {{ $gun->name }}</p>
    <p><strong>Brand:</strong> {{ $gun->brand }}</p>
    <p><strong>Caliber:</strong> {{ $gun->caliber }}</p>
    <p><strong>Magazine:</strong> {{ $gun->magazine }}</p>
    <p><strong>Price:</strong> $ {{ number_format($gun->price, 0, ',', '.') }}</p>

    <a href="{{ route('gun.index') }}" class="back-link">← Back</a>
</div>

@endsection
