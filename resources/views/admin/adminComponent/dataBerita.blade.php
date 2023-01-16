@extends('admin.adminDashboard')

@section('main')
<div class="modal fade" id="modalTambahBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

           
            <form action="addNews" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Judul Berita</label>
                  <input autocomplete="off" required type="text" class="form-control" name="judulBerita" value="{{ old('judulBerita') }}">
                  <span style="color:red">@error('JudulBerita'){{ $message }}
                    
                  @enderror</span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Isi Berita</label>
                  <textarea name="isiBerita" required class="form-control" cols="30" rows="10" ></textarea>
                  <span style="color:red">@error('isiBerita'){{ $message }}
                    
                    @enderror</span>
                </div>
                <div class="mb-3">
                  <label for="foto" class="form-label">Image</label>
                  <input id="foto"  autocomplete="off" type="file" class="form-control" name="foto" >
                  <span style="color:red">@error('foto'){{ $message }}
                    
                    @enderror</span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Pilih Kategori</label>
                  <select class="form-select" name="kategori"  aria-label="Default select example">
                   
                    <option selected>Kategori</option>
                    @foreach($kategoriBerita as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                    
                    
                  </select>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Tambah</button>
                  </div>
              </form>
        </div>
        
      </div>
    </div>
  </div>

  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

  <div class="modal fade" id="modalTambahKategoriBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

           
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
        </div>
        
      </div>
    </div>
  </div>

        <h1 class="align-middle mt-4">Data Berita</h1>
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
        
        
       
        <div class="card mb-4">
            
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>isi Berita</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Admin</th>
                            <th>Opsi</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>isi Berita</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Admin</th>
                            <th>Opsi</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($news as $a)
                            
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $a->judul_berita}}</td>
                            <td>{{ $a->isi_berita}}</td>
                            <td>{{ $a->tanggal }}</td>
                            <td>{{ $a->kategori_berita_id }}</td>
                            <td>{{ $a->admin_id }}</td>
                            <td>   <a href="" class="btn btn-wanrning"><i class="fas fa-edit"></i></a>  <a href="" class="btn btn-wanrning"><i class="fas fa-trash"></i></a> </td>
                           
                        </tr>

                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
  
@endsection