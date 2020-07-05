@extends('layouts.master')

@section('title', 'Detail Artikel')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">{{ $detail->judul }}</h6>
        </div>
        <div class="card-body">
            <p>{{ $detail->isi }}</p>
        </div>
        <div class="col-sm-2 mb-4 small">
            Tag : 
            <div class="card bg-secondary text-white shadow p-1">
                {{ $detail->tag }}
            </div>
        </div>
    </div>
    <a href="/artikel" class="btn btn-primary"><< Kembali ke daftar artikel</a>
@endsection