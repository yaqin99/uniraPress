@extends('admin.adminDashboard')

@section('main')


  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

  

        <h1 class="align-middle mt-4">Data Pengajuan</h1>
        {{-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
     
        
       
        <div class="card mb-4">
            @if(Session::get('empty'))
            <div class="alert alert-danger">
                {{ Session::get('empty') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <div class="card-body">
                <table id="datatablesSimple">
                    
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Nama Pengaju</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Penyetujuan</th>
                            <th>Dokumen</th>
                            <th>Detail</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengajuan as $a)
                            
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $a->nama_buku}}</td>
                            <td>{{ $a->nama_pengaju}}</td>
                            <td>{{ $a->email}}</td>
                            <td>{{ $a->tanggal}}</td>
                            <td>{{ $a->deskripsi}}</td>
                            <td>{{ $a->status}}</td>
                            
                                <td><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Persetujuan
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="/editPengajuanProses/{{ $a->id }}">Proses</a></li>
                                      <li><a class="dropdown-item" href="/editPengajuan/{{ $a->id }}">Setujui</a></li>
                                      
                                    </ul>
                                  </div></td>
                            

                            <td><div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dokumen
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->sampul_luar) }}">Sampul Luar</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->sampul_dalam) }}">Sampul Dalam</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->daftar_isi) }}">Daftar Isi</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->prakata) }}">Prakata</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->sinopsis) }}">Sinopsis</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->isi_buku) }}">Isi Buku</a></li>
                                  <li><a class="dropdown-item" href="{{ asset('storage/' . $a->surat_permohonan)  }}">Surat Permohonan</a></li>
                                    <hr>
                                  <li><a class="dropdown-item" href="/addPermohonan/{{$a->id}}">Upload Surat Permohonan</a></li>

                                </ul>
                              </div></td>
                            
                            <td><a class="btn btn-warning" href="/detailPengajuan/{{ $a->id }}">Detail</a></td>
                           
                        </tr>

                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
  
@endsection