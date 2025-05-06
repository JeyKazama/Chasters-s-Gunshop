@extends('layouts.app')

@section('content')

<style>
  body {
    background: linear-gradient(to bottom right, #333, #666);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    min-height: 100vh;
    margin: 0;
    padding: 40px;
    text-align: center;
  }

  h1 {
    font-size: 48px;
    margin-bottom: 10px;
  }

  p {
    font-size: 20px;
    margin-bottom: 40px;
  }

  .enter-btn {
    background-color: #007bff;
    color: white;
    padding: 14px 30px;
    font-size: 18px;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .enter-btn:hover {
    background-color: #0056b3;
  }
</style>

<h1>Welcome to Gun Tracker</h1>
<p>Your reliable system to manage firearm data efficiently and safely.</p>

<a href="{{ route('gun.index') }}" class="enter-btn">Enter Dashboard</a>

@endsection
