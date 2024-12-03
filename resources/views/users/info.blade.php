@extends('layout')

@section('content')
    <h3>User Info</h3>
    <div>id: {{ $user->id }}</div>
    <div>name: {{ $user->name }}</div>
    <div>email: {{ $user->email }}</div>
@endsection
