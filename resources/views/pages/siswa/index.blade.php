@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Data Siswa</h3>
                <div class="right">
                    <a href="{{route('siswa.create')}}" class="btn" >
                        <i class="lnr lnr-plus-circle"></i>  Tambah Data Siswa
                    </a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            {{-- <th>Gambar</th> --}}
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                       @forelse ($data_siswa as $siswa)
                           <tr>
                               <td>{{$no}}</td>
                               <td>{{$siswa->nama_lengkap}}</td>
                               <td>{{$siswa->jurusan->jurusan}}</td>
                               <td>{{$siswa->ttl}}</td>
                               <td>{{$siswa->jenis_kelamin}}</td>
                               <td>{{$siswa->agama}}</td>
                               <td>{{$siswa->alamat}}</td>
                               <td>
                                <a href="{{route('profile', $siswa->id )}}" class="btn btn-warning">
                                    <i class="lnr lnr-eye"></i>
                                </a>
                                   <a href="{{route('siswa.edit', $siswa->id )}}" class="btn btn-success">
                                       <i class="lnr lnr-pencil"></i>
                                   </a>
                               </td>
                               <td>
                                <form action="{{route('siswa.destroy', $siswa->id )}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger d-inline">
                                        <i class="lnr lnr-trash"></i>
                                    </button>
                                </form>
                               </td>
                           </tr>
                        <?php $no++ ?>
                       @empty
                           <tr>
                                <td colspan="7" class="text-center">
                                    Data Siswa Kosong
                                </td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection

