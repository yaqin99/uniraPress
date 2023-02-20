@extends('admin.adminDashboard')

@section('main')


  {{-- Modal Tambah Buku  --}}


  {{-- Modal Tambah kategori  --}}

  

        <h1 class="align-middle mt-4">Data Pengajuan</h1>
        {{-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
     
        
       
        <div class="card mb-4">
            
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
                            <td><a class="btn btn-primary" href="/editPengajuan/{{ $a->id }}">Setujui</a></td>
                           
                        </tr>

                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
  
@endsection