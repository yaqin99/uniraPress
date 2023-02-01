@extends('admin.adminDashboard')

@section('main')


  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

 
       

            <h1>Tambah Kategori Buku</h1>
       
        {{-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
        @if(Session::get('success'))
       
        <div class="alert alert-success">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        @if(Session::get('berhasilHapus'))
       
        <div class="alert alert-success">
            {{ Session::get('berhasilHapus') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::get('gagalHapus'))
        <div class="alert alert-danger">
            {{ Session::get('gagalHapus') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        {{-- <div class="row justify-content-end ">
            <div class="col-md-2">
                <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahBuku">Tambah Buku</button>

            </div>
           

        </div> --}}
        <form action="/addKategori" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
            <input autocomplete="off" type="text" class="form-control" name="namaKategori" aria-describedby="emailHelp" value="{{ old('namaKategori') }}">
            <span style="color:red">@error('namaKategori'){{ $message }}
              
            @enderror</span>
          </div>
         
        
         
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Tambah</button>
            </div>
        </form>
        
        
       
        
  
@endsection