<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodsController extends Controller
{
  public function index()
  {
    $foods = Foods::get();

    return view('foods.index', ['foods' => $foods]);
  }
  public function tambah()
  {
    return view('foods.form');
  }
  public function simpan(Request $request)
  {
    $file = $request->file('photo');

    $filename = time() . '.' .
      $file->getClientOriginalExtension();
    $photo_path =
      $request->file('photo')->storeAs('public/foods', $filename);
    $photo_path = str_replace('public/', '', $photo_path);

    $data = [
      'nama_makanan' => $request->nama_makanan,
      'kategori_makanan' => $request->kategori_makanan,
      'stok' => $request->stok,
      'harga' => $request->harga,
      'photo' => $photo_path

    ];
    Foods::create($data);
    return redirect()->route('foods');
  }
  public function edit($id)
  {
    $foods = Foods::where('id', $id)->first();
    return view('foods.form', ['foods' => $foods]);
  }

  public function update($id, Request $request)
  {
    $foods = Foods::find($id);

    $file = $request->file(('photo'));
    $filename = time() . '.' . $file->getClientOriginalExtension();
    $path = $request->file(('photo'))->storeAs('public/foods', $filename);

    $path = str_replace('public/', '', $path);

    $foods->nama_makanan = $request->nama_makanan;
    $foods->kategori_makanan = $request->kategori_makanan;
    $foods->stok = $request->stok;
    $foods->harga = $request->harga;
    $foods->photo = $path;
    $foods->save();


    return redirect()->route('foods');
  }

  public function hapus($id)
  {
    Foods::find($id)->delete();

    return redirect()->route('foods');
  }
}