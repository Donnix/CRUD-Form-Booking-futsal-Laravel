@extends('layout.template')
@section('konten')

    <!-- START FORM -->
    <form action='{{url('mahasiswa')}}' method='post' enctype="multipart/form-data">
@csrf

{{-- NPM --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value="{{Session::get('npm')}}" name='npm' id="npm">
            </div>
        </div>

        {{-- Nama --}}
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  value= "{{Session::get('nama')}}" name='nama' id="nama">
            </div>
        </div>


        {{-- Nomor --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Nomor WhatsApp</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value= "{{Session::get('no_wa')}}" name='no_wa' id="no_wa">
            </div>
        </div>

        {{-- Fakultas --}}
        <div class="mb-3 row">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
                <select class="form-select" name="fakultas" id="fakultas">
                    <option value="" disabled selected>PILIH FAKULTAS</option>
                    <option value="Ilmu Komputer dan Teknologi Informasi">  Ilmu Komputer dan Teknologi Informasi </option>
                    <option value="Ekonomi"> Ekonomi </option>
                    <option value="Teknologi Industri"> Teknologi Industri </option>
                    <option value="Teknik Sipil dan Perencanaan"> Teknik Sipil dan Perencanaan </option>
                    <option value="Psikologi"> Psikologi </option>
                    <option value="Sastra"> Sastra </option>
                    <option value="Komunikasi"> Komunikasi </option>
                </select>
            </div>
        </div>
        
        {{-- Jurusan --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <select class="form-select" name="jurusan" id="jurusan">
                    <option value="" disabled selected>PILIH JURUSAN</option>
                    <option value="Teknik Informatika"> Teknik Informatika </option>
                    <option value="Sistem Informasi"> Sistem Informasi</option>
                    <option value="Ilmu Komputer"> Ilmu Komputer</option>
                    <option value="Manajemen"> Manajemen </option>
                    <option value="Akuntansi"> Akuntansi</option>
                    <option value="Ilmu Ekonomi"> Ilmu Ekonomi</option>
                    <option value="Teknik Industri"> Teknik Industri </option>
                    <option value="Arsitektur"> Arsitektur </option>
                    <option value="Teknik Sipil"> Teknik Sipil</option>
                    <option value="Psikologi"> Psikologi. </option>
                    <option value="Bahasa Inggris"> Bahasa Inggris </option>
                    <option value="Komunikasi"> Komunikasi </option>
                </select>   
            </div>
        </div>
        

        {{-- Tingkat --}}
        <div class="mb-3 row">
            <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
            <div class="col-sm-10">
                <select class="form-select" name="tingkat" id="tingkat">
                    <option value="" disabled selected>PILIH TINGKAT</option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="3"> 4 </option>  
                
                </select>
            </div>
        </div>
        

        {{-- Tanggal --}}
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Main</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="{{ Session::get('tanggal') }}" name="tanggal" id="tanggal">
            </div>
        </div>
        

        {{-- Jam Mulai --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Mulai</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{Session::get('mulai')}}" name='mulai' id="mulai">
            </div>
        </div>

        {{-- Jam Akhir --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Akhir</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{Session::get('akhir')}}" name='akhir' id="akhir">
            </div>
        </div>

        {{-- KRS --}}
        <div class="mb-3 row">
            <label for="krs" class="col-sm-2 col-form-label">KRS (PDF)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="file_krs" id="file_krs" accept=".pdf">
            </div>
        </div>

        {{-- Tombol --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
