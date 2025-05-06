@extends('layouts.app')

@section('content')

<style>
  body {
    background: linear-gradient(to bottom, #f5f5f5, #767676);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: black;
    min-height: 100vh;
    margin: 0;
    padding: 20px;
  }

  h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 36px;
  }

  .add-gun {
    display: block;
    margin: 0 auto 20px;
    width: 160px;
    padding: 12px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s ease;
  }

  .add-gun:hover {
    background-color: #0056b3;
  }

  .success-message {
    background-color: #28a745;
    color: white;
    font-weight: bold;
    text-align: center;
    margin: 0 auto 20px;
    width: fit-content;
    padding: 10px 20px;
    border-radius: 6px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }

  th, td {
    padding: 12px 16px;
    text-align: center;
  }

  thead {
    background-color: #d5d5d5;
  }

  .btn-primary,
  .btn-edit,
  .btn-delete button {
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    margin: 2px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.2s ease;
    border: none;
    cursor: pointer;
  }

  .btn-primary {
    background-color: #007bff;
    color: white;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .btn-edit {
    background-color: #28a745;
    color: white;
  }

  .btn-edit:hover {
    background-color: #1e7e34;
  }

  .btn-delete {
    display: inline;
  }

  .btn-delete button {
    background-color: #dc3545;
    color: white;
  }

  .btn-delete button:hover {
    background-color: #bd2130;
  }
</style>

<h1>Gun List</h1>

<a href="{{ route('gun.create') }}" class="add-gun">+ Add Gun</a>

@if (session('success'))
  <div class="success-message">{{ session('success') }}</div>
@endif

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Brand</th>
      <th>Caliber</th>
      <th>Magazine</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($gun as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->brand }}</td>
        <td>{{ $item->caliber }}</td>
        <td>{{ $item->magazine }}</td>
        <td>$ {{ number_format($item->price, 0, ',', '.') }}</td>
        <td>
          <a class="btn-primary" href="{{ route('gun.show', $item->id) }}">Detail</a>
          <a class="btn-edit" href="{{ route('gun.edit', $item->id) }}">Edit</a>
          <form class="btn-delete" action="{{ route('gun.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
