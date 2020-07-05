@extends('layouts.master')

@section('title', 'Sunting Artikel')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/artikel/{{ $sunting->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" value="{{ $sunting->judul }}" placeholder="Judul artikel ..." name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" placeholder="Isi artikel ..." name="isi" id="isi" rows="6">{{ $sunting->isi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" value="{{ $sunting->tag }}" placeholder="Tambahkan tag ..." name="tag" id="tag">
                </div>
                <button type="submit" style="width: auto" class="btn btn-primary btn-user btn-block">
                    Sunting artikel
                </button>
                <button onclick="window.location.href='/artikel'" style="width: auto" class="btn btn-danger btn-user btn-block">
                    Batal
                </button>
            </form>
        </div>
    </div>

@endsection