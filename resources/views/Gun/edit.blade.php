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
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #218838;
    }
</style>

<div class="my-form">
    <h1 class="form-title">Edit Gun</h1>

    <form action="{{ route('gun.update', $gun->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('gun.form')

        <button type="submit" class="btn-submit">Update</button>
    </form>
</div>

@endsection
