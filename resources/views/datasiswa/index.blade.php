@extends('layouts.main')


@section('content')
    <a href="{{ route('DataSiswa.create') }}" class="btn btn-outline-success">Tambah Data</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($DataSiwas as $DataSiswa)
                <tr>
                    @php
                        $no = 1;
                    @endphp
                    <th scope="row">{{ $no++ }}</th>
                    <td><img src="{{ asset('storage/fotosiswa/' . $DataSiswa->foto) }}" alt="foto siswa" width="50px">
                    </td>
                    <td>{{ $DataSiswa->nama }}</td>
                    <td>{{ $DataSiswa->kelas }}</td>
                    <td>{{ $DataSiswa->alamat }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="{{ route('DataSiswa.show', $DataSiswa->id) }}" class="btn btn-warning">Lihat</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger" role="alert">
                    Data Siswa Belum Tersedia!
                </div>
            @endforelse
        </tbody>
    </table>
    {{ $DataSiwas->links() }}
@endsection
