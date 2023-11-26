@extends('layout.template')
@section('konten')
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="title" style="float:left;">
                    <h2>Form Futsal</h2>
                </div>  
            
                <!-- TOMBOL TAMBAH DATA -->
                <div class="add-button" style="float:right;">
                    <a href='{{ route('create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
            
          
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="col-lg-1">No</th>
                            <th class="col-lg-1">NPM</th>
                            <th class="col-lg-1">Nama</th>
                            <th class="col-lg-1">No WA</th>
                            <th class="col-lg-2">Fakultas</th>
                            <th class="col-lg-1">Jurusan</th>
                            <th class="col-lg-1">Tingkat</th>
                            <th class="col-lg-1">Tanggal</th>
                            <th class="col-lg-2">Jam</th>
                            <th class="col-lg-2">File Krs</th>
                            <th class="col-lg-1">Aksi</th>
                        </tr>
                        
                        
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $record)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$record->npm}}</td>
                            <td>{{$record->nama}}</td>
                            <td>{{$record->nohp}}</td>
                            <td>{{$record->fakultas}}</td>
                            <td>{{$record->jurusan}}</td>
                            <td>{{$record->tingkat}}</td>
                            <td>{{$record->tanggal}}</td>
                            <td>{{$record->mulai}} - {{$record->akhir}}</td>
                            <td><a href="{{ asset('Krs/Files/'.$record->file_krs) }}">Lihat KRS</a></td>
                           
                            
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('edit',$record->npm) }}">Edit</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')" href="{{ route('delete',$record->npm) }}">Delete</a>
                           
                            </td>
                        </tr> 
                        <?php $i++ ?>
                        @endforeach
                        
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
@endsection
        

