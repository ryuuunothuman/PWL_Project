@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Anggota</h6>
                <a href="anggota/create" class="btn btn-primary btn-sm mt-3">Tambah</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID Anggota</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Lahir</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kelamin</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No.KK</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No.Telp</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anggota as $anggota)
                            <tr>
                                <td>{{$anggota->anggota_id}}</td>
                                <td>{{$anggota->nama}}</td>
                                <td>{{$anggota->alamat}}</td>
                                <td>{{$anggota->tanggal_lahir}}</td>
                                <td>{{$anggota->jenis_kelamin}}</td>
                                <td>{{$anggota->no_kk}}</td>
                                <td>{{$anggota->no_telp}}</td>
                                <td>
                                    <a href="/anggota/{{ $anggota->anggota_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/anggota/{{ $anggota->anggota_id }}" class="btn btn-info btn-sm">Detail</a>
                                    <form action="/anggota/{{ $anggota->anggota_id }}" method="POST" class="d-inline">
                                        @method("DELETE")
                                        @csrf
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More rows -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
