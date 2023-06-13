<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')
        ->select(DB::raw('*, carts.id as carts_id'))
        ->join('members','members.id','=','carts.id_member')
        ->join('products','products.id','=','carts.id_barang')
        ->get();

        return response()->json($carts);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'id_member' => $request->input('id_member'),
            'id_barang' => $request->input('id_barang'),
            'jumlah' => $request->input('jumlah'),
            'size' => $request->input('size'),
            'color' => $request->input('color'),
            'total' => $request->input('total'),
            'is_checkout' => $request->input('is_checkout'),
        ];

        if (DB::table('carts')->insert($data)) {
           return response()->json([
            'status' => 200,
            'message' => 'Data berhasil ditambahkan'
           ]);
        }else{
            return response()->json([
                'status' => 401,
                'message' => 'Data gagal ditambahkan'
               ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carts = DB::table('carts')
        ->join('members','members.id','=','carts.id_member')
        ->join('products','products.id','=','carts.id_barang')
        ->where('members.id',$id)
        ->get();

        return response()->json($carts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    function hapusCart($id) {
        if (DB::table('carts')->where('id',$id)->delete()) {
            return response()->json([
                'status' => 200,
                'message' => "Data berhasil di hapus"
            ]);
        }else{
            return response()->json([
                'status' => 401,
                'message' => "Data gagal di hapus"
            ]);
        }
    }
}
