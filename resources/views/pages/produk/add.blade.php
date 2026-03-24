@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header bg-dark" style="color :aliceblue">Tambah Data</div>
        <div class="card-body">
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <Form action="/product" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control">
                            @error('nama_produk')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" name="harga" class="form-control">
                            @error('harga')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="deskripsi_produk" placeholder="Leave a comment here"style="height: 100px"></textarea>
                        <label>Detail Produk</label>
                        @error('Deskripsi')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 mt-3">
                    <button type="submit" class="btn btn-dark mb-3">Simpan</button>
                </div>
            </Form>

        </div>
    </div>
@endsection
