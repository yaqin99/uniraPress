@extends('admin.adminDashboard')

@section('main')



<h1>Edit Berita</h1>
       
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

@foreach($news as $a)
    
<form action="/editNews/{{ $a->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label  class="form-label">Judul Berita</label>
      <input autocomplete="off" required type="text" class="form-control" name="judul_berita" value="{{ old('judul_berita' , $a->judul_berita) }}">
      <span style="color:red">@error('JudulBerita'){{ $message }}
        
      @enderror</span>
    </div>
    <div class="mb-3">
      <label class="form-label">Isi Berita</label>
      <textarea name="isi_berita" required class="form-control" cols="30" rows="10" >{{ old('isi_berita' , $a->isi_berita) }}</textarea>
      <span style="color:red">@error('isiBerita'){{ $message }}
        
        @enderror</span>
    </div>
    {{-- <div class="mb-3">
      <label for="foto" class="form-label">Image</label>
      <input id="foto"  autocomplete="off" type="file" class="form-control" name="foto" >
      <span style="color:red">@error('foto'){{ $message }}
        
        @enderror</span>
    </div> --}}
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Pilih Kategori</label>
      <select class="form-select" name="kategori"  aria-label="Default select example">
       
        <option value="{{ $a->kategori_berita_id }}" selected>{{ $a->kategoriBerita->nama_kategori }}</option>
        @foreach($kategoriBerita as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
        @endforeach
        
        
      </select>
    </div>
   
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Update</button>
      </div>
  </form>

  @endforeach



  @endsection