@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Physical ERD</h6>
        </div>
        <div class="card-body">
            <img class="" src="{{ asset('/images/erd1.png') }}" alt="ERD">
        </div>
    </div>
    <a href="/artikel" class="btn btn-primary">Lihat Artikel</a>
        
@endsection