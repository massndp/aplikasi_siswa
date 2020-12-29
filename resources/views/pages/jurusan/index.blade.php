@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Data jurusan</h3>
                <div class="right">
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                        <i class="lnr lnr-plus-circle"></i>  Tambah Data Jurusan
                    </button>
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
                            <th>Jurusan</th>
                            <th>Aksi</th>
                            {{-- <th>Gambar</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                       @forelse ($items as $item)
                           <tr>
                               <td>{{$no}}</td>
                               <td>{{$item->jurusan}}</td>
                               <td>
                                   <a href="{{route('jurusan.edit', $item->id )}}" class="btn btn-success">
                                       <i class="lnr lnr-pencil"></i>
                                   </a>
                                   <form action="{{route('jurusan.destroy', $item->id )}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger d-inline">
                                        <i class="lnr lnr-trash"></i>
                                    </button>
                                </form>
                               </td>
                               {{-- <td>
                                <img src="{{Storage::url($jurusan->gambar)}}" alt=""
                                style="width: 100px">
                            </td> --}}
                           </tr>
                        <?php $no++ ?>
                       @empty
                           <tr>
                                <td colspan="7" class="text-center">
                                    Data jurusan Kosong
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data jurusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('jurusan.store')}}" method="POST">
                @csrf
                <div class="form group">
                    <label for="jurusan">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                    value="{{old('jurusan')}}" required>
                    @error('jurusan') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
</div>
