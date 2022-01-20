@extends('layouts.main')

@section('container')


    <div class="container-fluid position-relative green-box mt-5 ">


        <div class="row">
            <h4 class=" mt-5 mb-5 text-center">RINCIAN BARANG</h4>
        </div>

        <div class="row">

            <form action="{{ url('/transaksi') . '/' . $item['kode_barang'] }}" method="POST"
                class="mb-5 mt-5 pb-2 form-rincian">
                @csrf
                <input type="hidden" id="kode_barang" name="kode_barang" value="{{ $item['kode_barang'] }}">
                
                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Kode Barang</label>
                    </div>
                    <div class="col-3 ">
                        <input type="text" class="form-control form-transparent" name="kode_barang" id="kode_barang"
                            value="{{ $item['kode_barang'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Nama Barang</label>
                    </div>
                    <div class="col-3 ">
                        <input type="text" class="form-control form-transparent" name="nama_barang" id="nama_barang"
                            value="{{ $item['nama_barang'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Harga Barang</label>
                    </div>
                    <div class="col-3 ">
                        <input type="text" class="form-control form-transparent" name="harga" id="harga"
                            value="{{ $item['harga'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Nama Pembeli</label>
                    </div>
                    <div class="col-3 ">
                        <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" value="">
                    </div>

                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Qty</label>
                    </div>
                    <div class="col-3 ">
                        <input type="number" class="form-control form-input-kode " name="jumlah_beli" id="jumlah_beli"
                            placeholder="">
                    </div>

                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Tanggal Transaksi</label>
                    </div>
                    <div class="col-3 ">
                        <input type="date" id="" class="form-control" name="tanggal_beli" id="tanggal_beli">
                    </div>

                </div>


                <div class="row">
                    <div class=" mt-5 text-center">
                        <button class="btn btn-oke " type="submit">OK</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
