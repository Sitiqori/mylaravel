{{-- dashboard.blade.php --}}
@extends('layout.mainlayout')

@section('title', 'Tambah Data Pegawai')

@section('content')
    <h3 class="mt-5">Tambah Data Pegawai</h3>

     <div class="mt-5 w-50">
          <form action="tambah-data" method="post">
               @csrf
               <div  class="mt-3">
                    <label for="nama" class="form-lebel">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
               </div>
               <div  class="mt-3">
                    <label for="slug" class="form-lebel">Nama</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">
               </div>
               <div class="mt-3">
                    <label for="nip" class="form-label">Nip</label>
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="Nip">
                </div>
                <div class="mt-3">
                    <label for="masa_kerja" class="form-lebel">Masa Kerja</label>
                    <input type="text" name="masa_kerja" id="masa_kerja" class="form-control" placeholder="Masa Kerja">
                </div>
               <div class="mt-3">
                    <label for="jenis_kelamin" class="form-lebel">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                         <option value="laki-laki">Laki-Laki</option>
                         <option value="perempuan">Perempuan</option>
                     </select>
               </div>
               <div class="mt-3">
                    <label for="alamat" class="form-lebel">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat">
               </div>
               <div class="mt-3">
                    <label for="foto" class="form-label" >Tambahkan Foto Anda</label><br>
                    <input type="file" name="foto" id="foto" class="form-control-file">
                </div>
               <div class="mt-5">
                    <button class="btn btn-success " type="submit">Simpan Data </button>
               </div>
          </form>
     </div>

     
@endsection
