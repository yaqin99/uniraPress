@extends('admin.adminDashboard')

@section('main')


  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

  

        <h1 class="align-middle mt-4">File Pengajuan</h1>
        {{-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
     
        
       
        <div class="card mb-4">
            
            <div class="card-body">
                <table id="datatablesSimple">
                    
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pemohon</th>
                            <th>Sampul Luar</th>
                            <th>Sampul Dalam</th>
                            <th>Prakata</th>
                            <th>Daftar Isi</th>
                            <th>Sinopsis</th>
                            <th>Isi Buku</th>
                            {{-- <th>Daftar Pustaka</th> --}}
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $a)
                            
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $a->nama_buku}}</td>
                            <td>{{ $a->nama_pengaju }}</td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->sampul_luar) }}" class="btn btn-wanrning">View</a></td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->sampul_dalam) }}" class="btn btn-wanrning">View</a></td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->daftar_isi) }}" class="btn btn-wanrning">View</a></td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->prakata) }}" class="btn btn-wanrning">View</a></td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->sinopsis) }}" class="btn btn-wanrning">View</a></td>
                            <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->isi_buku) }}" class="btn btn-wanrning">View</a></td>
                            {{-- <td><a class="btn btn-primary" href="{{ asset('storage/' . $a->daftar_pustaka) }}" class="btn btn-wanrning">View</a></td> --}}
                            {{-- <td><a class="btn btn-primary" href="/editPengajuan/{{ $a->id }}">Setujui</a></td> --}}
                           
                        </tr>

                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
  
@endsection