@extends('admin.adminDashboard')

@section('main')

  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

       

            <h1>Tambah Buku</h1>
       
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
        <form  action="/addBook" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
              <input autocomplete="off" type="text" class="form-control" name="namaBuku" " aria-describedby="emailHelp" value="{{ old('namaBuku') }}">
              <span style="color:red">@error('namaBuku'){{ $message }}
                
              @enderror</span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Penerbit</label>
              <input  autocomplete="off" type="text" class="form-control" name="penerbit" value="{{ old('penerbit') }}">
              <span style="color:red">@error('penerbit'){{ $message }}
                
                @enderror</span>
            </div>
            <div class="mb-3">
              <label class="form-label">Deskripsi Buku</label>
              <textarea name="deskripsi" required class="form-control" cols="30" rows="10" value="{{ old('deskripsi') }}"></textarea>
              <span style="color:red">@error('deskripsi'){{ $message }}
                
                @enderror</span>
            </div>
            <div class="mb-3">
              <label for="images" class="form-label">Image</label>
              <input id="images"  autocomplete="off" type="file" class="form-control" value="{{ old('image') }}" name="image" >
              <span style="color:red">@error('image'){{ $message }}
                
                @enderror</span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Pilih Kategori</label>
              <select class="form-select" name="kategori"  aria-label="Default select example">
               
                <option selected>Kategori</option>
                @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
                
                
              </select>
            </div>
            <div class="mb-3">
                <label for="dokumen" class="form-label">Dokumen</label>
                <input id="dokumen"  autocomplete="off" type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}" >
                <span style="color:red">@error('dokumen'){{ $message }}
                  
                  @enderror</span>
              </div>
           
           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Tambah</button>
              </div>
          </form>
        
        
       
        
  
@endsection