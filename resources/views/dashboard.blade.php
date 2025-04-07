@extends('layouts.adminlte')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <h1>Dashboard</h1>
        <p>Welcome, {{ Auth::user()->name }} (Testing mode)</p>
    </div>
@endsection
