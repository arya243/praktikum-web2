@extends('admin.layout.appadmin')

@section('content')
    <h1>Ini Adalah Halaman Dashboard</h1>
   
@endsection

@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif