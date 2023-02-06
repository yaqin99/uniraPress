@extends('admin.adminDashboard')

@section('main')
<div class="modal fade" id="modalTambahBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

           
            <form action="addBook" method="POST" enctype="multipart/form-data">
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
                  <textarea name="deskripsi" required class="form-control" cols="30" rows="10" ></textarea>
                  <span style="color:red">@error('deskripsi'){{ $message }}
                    
                    @enderror</span>
                </div>
                <div class="mb-3">
                  <label for="images" class="form-label">Image</label>
                  <input id="images"  autocomplete="off" type="file" class="form-control" name="image" >
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

  <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

           
            <form action="addKategori" method="POST">
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
        </div>
        
      </div>
    </div>
  </div>

        <h1 class="align-middle mt-4">Data Buku</h1>
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
                            <th>Nama Buku</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Opsi</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Opsi</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($books as $headache)
                            
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $headache->nama_buku }}</td>
                            <td>{{ $headache->penerbit }}</td>
                            <td>{{ $headache->kategoriBuku->nama_kategori }}</td>
                            <td>{{ $headache->tanggal }}</td>
                            <td>   <a href="admin/editBuku/{{ $headache->id }}" class="btn btn-wanrning"><i class="fas fa-edit"></i></a>  <a href="/deleteBuku/{{ $headache->id }}" class="btn btn-wanrning"><i class="fas fa-trash"></i></a><a href="{{ asset('storage/' . $headache->dokumen) }}" class="btn btn-wanrning"><i class="fas fa-download"></i></a></td>

                        </tr>

                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
  
@endsection