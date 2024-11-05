@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">All Pajak
                    <span class="float-end">
                        <a href="{{ route('pengguna.create') }}">
                            <button class="btn btn-outline-secondary">Add Pajak</button>
                        </a>
                    </span>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tanggal faktur</th>
                                <th scope="col">Nomor faktur</th>
                                <th scope="col">Nomor NPWP</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jumlah pembelian</th>
                                <th scope="col">PPN</th>
                                <th scope="col">Total tagihan</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($penggunas) > 0)
                            @foreach($penggunas as $key => $pengguna)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $pengguna->tanggal_faktur }}</td>
                                <td>{{ $pengguna->nomor_faktur }}</td>
                                <td>{{ $pengguna->no_npwp }}</td>
                                <td>{{ $pengguna->supplier }}</td>
                                <td>{{ $pengguna->keterangan }}</td>
                                <td>{{ $pengguna->jumlah_pembelian }}</td>
                                <td>{{ $pengguna->ppn }}</td>
                                <td>{{ $pengguna->total_tagihan }}</td>
                                <td>
                                    <a href="{{ route('pengguna.edit', [$pengguna->id]) }}">
                                        <button class="btn btn-outline-success">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pengguna->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{ route('pengguna.destroy', [$pengguna->id]) }}" method="post">
                                                @csrf 
                                                {{ method_field('DELETE') }}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="11" class="text-center">Tidak ada Pajak yang dapat ditampilkan</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $penggunas->links() }} <!-- Pastikan ini merujuk ke koleksi paginated -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
