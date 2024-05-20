@extends ('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Edit Anggota</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <form action="/anggota/{{ $anggota->anggota_id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{ $anggota->nama }}">
                      @error('nama')
                          <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{ $anggota->alamat }}">
                        @error('alamat')
                            <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TTL" value="{{ $anggota->tanggal_lahir }}">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <input name="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin" value="{{ $anggota->jenis_kelamin }}">
                        @error('jenis_kelamin')
                            <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No.KK</label>
                        <input name="no_kk" type="text" class="form-control @error('no_kk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No.KK" value="{{ $anggota->no_kk }}">
                        @error('no_kk')
                            <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No.Telepon</label>
                        <input name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No.Telepon" value="{{ $anggota->no_telp }}">
                        @error('no_telp')
                            <div class="invalid-feedback" style="font-size: 80%;">{{ $message }}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>   
@endsection
