@extends('layout')

@section('content')
    <h3>Backoffice</h3>

    <a href="/user/signOut" class="btn btn-danger" onclick="return confirm('Are you sure you want to sign out?')">
        <i class="fa fa-sign-out"></i>
        Sign Out
    </a>
    <a href="/user/info" class="btn btn-primary">
        <i class="fa fa-user"></i>
        User Info
    </a>
@endsection
