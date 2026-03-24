@extends('layout.master')

@section('content')
    <h5>Kategori Produk</h5>

    <a href="/kategori/create" class="btn btn-dark mb-2">Tambah Data</a>
    @if (@session('success'))
        <div class="alert alert-info mb-2">{{ session('success') }}</div>
    @endif
    <div class="card">
        <div class="card-header">Daftar Kategori</div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Deskripsi Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kategori as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="/kategori/{{ $item->id_kategori}}/edit" class="btn btn-warning mb-2">Edit</a>
                                <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                                    data-bs-target="#hapus{{ $item->id_kategori }}">Hapus</button>
                            </td>
                        </tr>
                @empty
                        <tr>
                            <td colspan="4">Data yang anda cari tidak ada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </tbody>
        </table>
    </div>
        @foreach ($kategori as $item)
        <!-- Modal untuk hapus data  -->
        <div class="modal fade" id="hapus{{ $item->id_kategori }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/kategori/{{ $item->id_kategori }}" method="POST" class="modal-content">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi !!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus kategori {{ $item->nama_kategori }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
