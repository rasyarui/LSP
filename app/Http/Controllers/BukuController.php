<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Buku2;
use App\Models\Buku3;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
  public function index(){
    $databuku = Buku::all();
    $databuku2 = Buku2::all();
    $databuku3 = Buku3::all();

    return view('home',[
        'databuku' => $databuku,
        'databuku2' => $databuku2,
        'databuku3' => $databuku3,
    ]);
  }
  

  public function tambah(){
    return view('/admin/tambah');
  }

 


  public function create(Request $request){
        $request->validate([
            'image' => 'required|image',
            'judul' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ],[
            'image.required' => 'Gambar Tidak Boleh Kosong',
            'judul.required' => 'Judul Tidak Boleh Kosong',
            'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('images', 'public');

        Buku::create($data);

        return redirect('/tambah');

  }

  public function create2(Request $request){
    $request->validate([
        'image' => 'required|image',
        'judul' => 'required',
        'tanggal' => 'required',
        'deskripsi' => 'required',
    ],[
        'image.required' => 'Gambar Tidak Boleh Kosong',
        'judul.required' => 'Judul Tidak Boleh Kosong',
        'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
        'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
    ]);

    $data = $request->all();
    $data['image'] = $request->file('image')->store('images', 'public');

    Buku2::create($data);

    return redirect('/tambah');

}
  public function create3(Request $request){
    $request->validate([
        'image' => 'required|image',
        'judul' => 'required',
        'tanggal' => 'required',
        'deskripsi' => 'required',
    ],[
        'image.required' => 'Gambar Tidak Boleh Kosong',
        'judul.required' => 'Judul Tidak Boleh Kosong',
        'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
        'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
    ]);

    $data = $request->all();
    $data['image'] = $request->file('image')->store('images', 'public');

    Buku3::create($data);

    return redirect('/tambah');

}

  public function show(Buku $buku){
    return view('/deskripsi',[
        'buku' => $buku,

    ]);
  }
  
  public function show2(Buku2 $buku2){
    return view('/deskripsi2',[
        'buku2' => $buku2,
    ]);
  }
  public function show3(Buku3 $buku3){
    return view('/deskripsi3',[
        'buku3' => $buku3,
    ]);
  }
  


  public function edit(Buku $buku){
    return view('/admin/edit',[
        'data' => $buku
    ]);
  }
  public function edit2(Buku2 $buku2){
    return view('/admin/edit2',[
        'data2' => $buku2
    ]);
  }
  public function edit3(Buku3 $buku3){
    return view('/admin/edit3',[
        'data3' => $buku3
    ]);
  }

 


  public function update(Request $request, Buku $buku){
    $request->validate([
      'image' => 'image',
      'judul' => 'required',
      'tanggal' => 'required',
      'deskripsi' => 'required',
    ],[
      'judul.required' => 'Judul Tidak Boleh Kosong',
      'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
      'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
    ]);

    $data = $request->all();

    if($request->file('image')){
      Storage::delete('public/' . $buku->image);
      $data['image'] = $request->file('image')->store('images','public');
    }else{
      $data['image'] = $buku->image;
    }


    $buku->update($data);

    return redirect('/home');
  }
  public function update2(Request $request, Buku2 $buku2){
    $request->validate([
      'image' => 'image',
      'judul' => 'required',
      'tanggal' => 'required',
      'deskripsi' => 'required',
    ],[
      'judul.required' => 'Judul Tidak Boleh Kosong',
      'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
      'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
    ]);

    $data = $request->all();

    if($request->file('image')){
      Storage::delete('public/' . $buku2->image);
      $data['image'] = $request->file('image')->store('images','public');
    }else{
      $data['image'] = $buku2->image;
    }


    $buku2->update($data);

    return redirect('/home');
  }


  public function update3(Request $request, Buku3 $buku3){
    $request->validate([
      'image' => 'image',
      'judul' => 'required',
      'tanggal' => 'required',
      'deskripsi' => 'required',
    ],[
      'judul.required' => 'Judul Tidak Boleh Kosong',
      'tanggal.required' => 'Tanggal Tidak Boleh Kosong',
      'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
    ]);

    $data = $request->all();

    if($request->file('image')){
      Storage::delete('public/' . $buku3->image);
      $data['image'] = $request->file('image')->store('images','public');
    }else{
      $data['image'] = $buku3->image;
    }


    $buku3->update($data);

    return redirect('/home');
  }




  public function delete(Buku $buku){
    Storage::delete('public/' . $buku->image);

    $buku->delete();

    return redirect('/home');
  }
  public function delete2(Buku2 $buku2){
    Storage::delete('public/' . $buku2->image);

    $buku2->delete();

    return redirect('/home');
  }
  public function delete3(Buku3 $buku3){
    Storage::delete('public/' . $buku3->image);

    $buku3->delete();

    return redirect('/home');
  }

}



