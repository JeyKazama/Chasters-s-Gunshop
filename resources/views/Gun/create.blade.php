@extends('layouts.app')

@section('content')

<style>
    .my-form {
        width: 500px;
        margin: 50px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        border-radius: 10px;
        background-color: #ffffff;
    }

    .form-title {
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 24px;
    }

    .btn-submit {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>

<div class="my-form">
    <h1 class="form-title">Add Gun</h1>

    <form action="{{ route('gun.store') }}" method="POST">
        @csrf
        @method('POST')

        @include('gun.form')

        <button type="submit" class="btn-submit">Add</button>
    </form>
</div>

@endsection
