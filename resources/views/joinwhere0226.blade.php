@extends('layout/main0226')

@section('title', 'Kegiatan 2')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Menampilkan Data Join Where</h1>
    <br>
    <h4>Menampilkan Select ALL dari Join Tabel 'ms_peminjaman' dan 'ms_petugas' dengan Where tgl peminjaman</h4>
    <br>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode peminjaman</th>
      <th scope="col">Kode Petugas</th>
      <th scope="col">Kode peminjam</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">Nama Petugas</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($data as $dt)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dt->kode_peminjaman}}</td>
      <td>{{$dt->kode_petugas}}</td>
      <td>{{$dt->kode_peminjam}}</td>
      <td>{{$dt->tgl_peminjaman}}</td>
      <td>{{$dt->tgl_kembali}}</td>
      <td>{{$dt->nama_petugas}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   