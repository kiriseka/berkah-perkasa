@extends('layouts.main')

@section('container')


    <div class="container-fluid position-relative green-box mt-5 ">



        <div class="row">
            <h4 class=" mt-5  text-center">RINCIAN TRANSAKSI</h4>
            <form action="/status" method="get" class="mb-3 mt-5 form-transaksi">
                @csrf
                
                <div class="row align-items-center">
                    <div class="col-2 offset-2">
                        <label for="" class="col-form-label">Kode Barang</label>
                    </div>
                    <div class="col-3 mb-3 offset-1">
                        <input type="text" id="kode_barang " class="form-control" value="{{ $item['kode_barang'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label">Nama Barang</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="text" id=" " class="form-control" value="{{ $item['nama_barang'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label">Harga Barang</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="number" id=" " class="form-control" value="{{ $item['harga'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label">Nama Pembeli</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="text" id=" " class="form-control" value="{{ $item['nama_pembeli'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label">Qty</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="number" id="jumlah_beli" class="form-control" value="{{ $item['jumlah_beli'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label">Tanggal Transaksi</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="date" id=" " class="form-control" value="{{ $item['tanggal_beli'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label fw-bold">Total Harga</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="number" id=" " class="form-control fw-bold" value="{{ $item['total_harga'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label fw-bold">Total Diskon</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="number" id=" " class="form-control fw-bold" value="{{ $item['diskon'] }}" disabled>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-2 offset-2">
                        <label for=" " class="col-form-label fw-bold">Total Belanja</label>
                    </div>
                    <div class="col-3 offset-1">
                        <input type="number" id=" " class="form-control fw-bold" value="{{ $item['harga_akhir'] }}" disabled>
                    </div>
                </div>



                <div class="row align-items-center mb-3 lanjutkan float-end">
                    <h5 >Lanjutkan Pembayaran ?</h5>
                    <div class="col-auto">
                        <a href="">
                            <button class="btn btn-oke "  style="background-color: #E8D695;" type="submit" value="submit" name="submit">YA</button>
                        </a>

                    </div>
                    <div class="col-auto">
                        <a href="">
                            <button class="btn btn-oke " type="submit" value="cancel" name="cancel" formaction="/">TIDAK</button>
                        </a>

                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection
