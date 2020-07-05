@extends('layouts.master')

@section('title', 'Buat Artikel')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Isi Form Berikut</h6>
        </div>
        <div class="card-body">
            <form action="/artikel" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul artikel ..." name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" placeholder="Isi artikel ..." name="isi" id="isi" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" placeholder="Tambahkan tag ..." name="tag" id="tag">
                </div>
                <button type="submit" style="width: auto" class="btn btn-primary btn-user btn-block">
                    Buat artikel
                </button>
                <a href="/artikel" style="width: 7%" class="btn btn-danger btn-user btn-block">
                    Batal
                </a>
            </form>
        </div>
    </div>

@endsection