@extends('admin.layout.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Produk</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboardAdmin') }}">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('produk.create') }}" class="btn btn-outline-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($produk as $pr)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pr->nama_produk }}</td>
                                        <td>{{ $pr->deskripsi }}</td>
                                        <td>
                                            <img src="{{ asset('storage/produks/' . basename($pr->foto)) }}" width="100">
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/produk/edit/'.$pr->id) }}"><span class="fa-fw select-all fas"></span></a>
                                            <a href="#" onclick="deleteConfirmation('{{ $pr->id }}')"><span
                                                    class="fa-fw select-all fas"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function deleteConfirmation(id) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus item ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan penghapusan ke URL delete dengan metode DELETE
                    axios.delete('/admin/produk/delete/' + id)
                        .then(function(response) {
                            // Tindakan setelah penghapusan berhasil
                            Swal.fire('Terhapus!', 'Item telah dihapus.', 'success');
                            // Muat ulang halaman atau lakukan tindakan lain yang diperlukan
                            location.reload();
                        })
                        .catch(function(error) {
                            // Tindakan jika terjadi kesalahan pada permintaan penghapusan
                            console.error('Error deleting item:', error);

                            let errorMessage = 'Terjadi kesalahan saat menghapus item.';
                            if (error.response && error.response.data && error.response.data.message) {
                                errorMessage = error.response.data.message;
                            }

                            Swal.fire('Gagal!', errorMessage, 'error');
                        });

                }
            });
        }
    </script>
@endsection
