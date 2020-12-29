@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
    <div class="container-fluid">
    
        <div class="row">
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Edit Data Siswa</h3>
    <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" 
            value="{{old('nama_lengkap')}}" required>
            @error('nama_lengkap') <div class="text-muted">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jurusan_id">Jurusan</label>
            <select name="jurusan_id" class="form-control">
                <option value="">Pilih Jurusan</option>
                @foreach ($jurusans as $jurusan)
                    <option value="{{$jurusan->id}}">{{$jurusan->jurusan}}</option>
                @endforeach    
            </select>                    
        </div>
        <div class="form group">
            <label for="ttl">Tanggal Lahir</label>
            <input name="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" 
            value="{{old('ttl')}}" required>
            @error('ttl') <div class="text-muted">{{$message}}</div> @enderror
        </div>
        <div class="form group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form group">
            <label for="agama">Agama</label>
            <input name="agama" type="text" class="form-control @error('agama') is-invalid @enderror" 
            value="{{old('agama')}}" required>
            @error('agama') <div class="text-muted">{{$message}}</div> @enderror
        </div>
        <div class="form group">
            <label for="alamat">Alamat</label>
            <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" 
            value="{{old('alamat')}}" required>
            @error('alamat') <div class="text-muted">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Upload Gambar</label><br>
            <input type="file" name="gambar" class="@error('gambar') is-invalid @enderror">
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
        </div>
        <!-- OVERVIEW -->
           
            
        </div>
    </div>
    
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
</div>
