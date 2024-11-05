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
            <form action="{{ route('pengguna.update', ['pengguna' => $pengguna]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="card">
                    <div class="card-header">Update Pajak</div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="tanggal_faktur">tanggal faktur</label>
                            <input type="date" name="tanggal_faktur" class="form-control @error('tanggal_faktur') is-invalid @enderror" value="{{ old('tanggal_faktur', $pengguna->tanggal_faktur) }}">
                            @error('tanggal_faktur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nomor_faktur">no. faktur</label>
                            <input type="number" name="nomor_faktur" class="form-control @error('nomor_faktur') is-invalid @enderror" value="{{ old('nomor_faktur', $pengguna->nomor_faktur) }}">
                            @error('nomor_faktur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_npwp">no. npwp</label>
                            <input type="number" name="no_npwp" class="form-control @error('no_npwp') is-invalid @enderror" value="{{ old('no_npwp', $pengguna->no_npwp) }}">
                            @error('no_npwp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="supplier">supplier</label>
                            <textarea name="supplier" class="form-control @error('supplier') is-invalid @enderror" role="alert">{{ old('supplier', $pengguna->supplier) }}</textarea>
                            @error('supplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan">keterangan</label>
                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" role="alert">{{ old('keterangan', $pengguna->keterangan) }}</textarea>
                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jumlah_pembelian">jumlah pembelian</label>
                            <input type="number" name="jumlah_pembelian" class="form-control @error('jumlah_pembelian') is-invalid @enderror" value="{{ old('jumlah_pembelian', $pengguna->jumlah_pembelian) }}">
                            @error('jumlah_pembelian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ppn">ppn</label>
                            <input type="number" name="ppn" class="form-control @error('ppn') is-invalid @enderror" value="{{ old('ppn', $pengguna->ppn) }}">
                            @error('ppn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="total_tagihan">total tagihan</label>
                            <input type="number" name="total_tagihan" class="form-control @error('total_tagihan') is-invalid @enderror" value="{{ old('total_tagihan', $pengguna->total_tagihan) }}">
                            @error('total_tagihan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                                <button class="btn btn-outline-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
