@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('pengguna.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-header">Add new Pajak</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="tanggal_faktur">tanggal faktur</label>
                        <input type="date" name="tanggal_faktur" class="form-control @error('tanggal_faktur')is-invalid @enderror">
                        @error('tanggal_faktur')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_faktur">nomor faktur</label>
                        <input type="number" name="nomor_faktur" class="form-control @error('nomor_faktur')is-invalid @enderror">
                        @error('nomor_faktur')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_npwp">no. npwp</label>
                        <input type="number" name="no_npwp" class="form-control @error('no_npwp')is-invalid @enderror">
                        @error('no_npwp')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="supplier">supplier</label>
                        <input type="text" name="supplier" class="form-control @error('supplier')is-invalid @enderror">
                        @error('supplier')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan')is-invalid @enderror">
                        @error('keterangan')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pembelian">jumlah pembelian</label>
                        <input type="number" name="jumlah_pembelian" class="form-control @error('jumlah_pembelian')is-invalid @enderror">
                        @error('jumlah_pembelian')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ppn">ppn</label>
                        <input type="number" name="ppn" class="form-control @error('ppn')is-invalid @enderror">
                        @error('ppn')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_tagihan">total tagihan</label>
                        <input type="number" name="total_tagihan" class="form-control @error('total_tagihan')is-invalid @enderror">
                        @error('total_tagihan')
                        <span class="invalid-feedback" role "alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-outline-primary" type="submit">submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection