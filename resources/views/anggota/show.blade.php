@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Detail Anggota</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nama:</strong> {{ $anggota->nama }}</p>
                        <p><strong>Alamat:</strong> {{ $anggota->alamat }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $anggota->tanggal_lahir }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $anggota->jenis_kelamin }}</p>
                        <p><strong>No.KK:</strong> {{ $anggota->no_kk }}</p>
                        <p><strong>No.Telp:</strong> {{ $anggota->no_telp }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
