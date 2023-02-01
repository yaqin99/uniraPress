@extends('admin.adminDashboard')

@section('main')

<h1>Tambah Kategori Berita</h1>


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

  {{-- Modal Tambah Buku  --}}

  {{-- Modal Tambah kategori  --}}

  <form action="addKategoriBerita" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Kategori Berita</label>
      <input autocomplete="off" type="text" class="form-control" name="namaKategoriBerita" aria-describedby="emailHelp" value="{{ old('namaKategoriBerita') }}">
      <span style="color:red">@error('namaKategoriBerita'){{ $message }}
        
      @enderror</span>
    </div>
   
  
   
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Tambah</button>
      </div>
  </form>

  @endsection