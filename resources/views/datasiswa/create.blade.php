@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('DataSiswa.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Masukan Foto</label>
            <input class="form-control" name="foto" type="file" id="formFile">
            @error('foto')
                <div class="alert alert-danger" role="alert">
                    Foto Wajib Diisi!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Masukan Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp">
            @error('nama')
                <div class="alert alert-danger" role="alert">
                    Nama Wajib Diisi!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" name="kelas" aria-label="Default select example">
                <option selected>Pilih Kelas</option>
                <option value="pplg">PPLG</option>
                <option value="tjkt">TJKT</option>
                <option value="to">TO</option>
                <option value="pemasaran">PEMASARAN</option>
                <option value="akl">AKUTANSI</option>
            </select>
            @error('kelas')
                <div class="alert alert-danger" role="alert">
                    Kelas Wajib Diisi!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat">Masukan Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat disini" id="floatingTextarea2"
                style="height: 100px" id="alamat"></textarea>
            @error('alamat')
                <div class="alert alert-danger" role="alert">
                    ALamat Wajib Diisi!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a href="{{ route('DataSiswa.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
