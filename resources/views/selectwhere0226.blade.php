@extends('layout/main0226')

@section('title', 'Kegiatan 2')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Menampilkan Data Select Where</h1>
    <br>
    <h2>Tabel Buku dengan Kategori 'K001'</h2>
    <br>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Kode Kategori</th>
      <th scope="col">Kode Penerbit</th>
      <th scope="col">Judul</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Tahun Terbit</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($ms_buku as $bk)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$bk->kode_buku}}</td>
      <td>{{$bk->kode_kategori}}</td>
      <td>{{$bk->kode_penerbit}}</td>
      <td>{{$bk->judul_buku}}</td>
      <td>{{$bk->jumlah_buku}}</td>
      <td>{{$bk->pengarang_buku}}</td>
      <td>{{$bk->tahun_terbit_buku}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   
