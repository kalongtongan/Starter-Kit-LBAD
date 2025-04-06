@extends('layouts.adminlte')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <h1>Dashboard</h1>
        <p>Welcome, Agung dan Grok! (Testing mode){{-- {{ Auth::user()->name }} --}}</p>
    </div>
@endsection
