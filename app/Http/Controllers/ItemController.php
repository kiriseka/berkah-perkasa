<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $item = DB::table('items')->get();
        return view('input-barang', ['item' => $item]);
    }

    public function detail(Request $request)
    {
        $kode_barang = $request->kode_barang;
        $item = Item::where('kode_barang', $kode_barang)->first();
        // return $item;
        return view('detail-barang', compact('item', $item));
    }

    public function transaksi(Request $request)
    {

        
        $kode_barang = $request->kode_barang;
        $item = Item::where('kode_barang', $kode_barang)->first();


        $item->nama_pembeli = $request->nama_pembeli;
        $item->jumlah_beli = $request->jumlah_beli;
        $item->tanggal_beli = $request->tanggal_beli;

        $a = $item->jumlah_beli;
        $qty = (int)$a;
        $item->jumlah_beli = $qty;

        // $total_harga = $item->jumlah_beli * $item->harga;

        // DB::table('items')
        //     ->select('department', DB::raw('SUM(price) as total_sales'))
        //     ->groupBy('department')
        //     ->havingRaw('SUM(price) > ?', [2500])
        //     ->get();

        $item->total_harga = $item->jumlah_beli * $item->harga;
        
        if($item->total_harga > 50000 ){
            $item->diskon = $item->total_harga * 10 / 100;
            $item->harga_akhir = $item->total_harga - $item->diskon;
        } else{
            $item->diskon = 0;
            $item->harga_akhir = $item->total_harga - $item->diskon;
        }


        $item->save();
        // return $item->jumlah_beli;
        // return $item;
        return view('transaksi', compact('item', $item));
        switch ($request->input('action')) {
            case 'submit':
                return redirect('/status');
                break;

            case 'cancel':
                return redirect('input-barang', compact('item', $item));
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
