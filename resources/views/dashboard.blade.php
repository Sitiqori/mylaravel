{{-- dashboard.blade.php --}}
@extends('layout.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Data Pegawai</h1>


     <div class="mt-5 d-flex justify-content-end">
          <a href="tambah-data" class="btn btn-primary ">Tambah Data</a>
     </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    {{-- <th>Nip.</th> --}}
                    <th>Nama</th>
                    <th>Masa Kerja</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($isidata as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{{ $item->nip }}</td> --}}
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->masa_kerja }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="edit">Edit</a>
                            <a href="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
