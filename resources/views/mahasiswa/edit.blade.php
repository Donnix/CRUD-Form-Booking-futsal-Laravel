@extends('layout.template')
@section('konten')

    <!-- START FORM -->
    <form action='{{url('update',$record->npm)}}' method='post' enctype="multipart/form-data">
@csrf

{{-- NPM --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type = "number" class="form-control" value="{{ $record->npm }}" name='npm' id="npm">
            </div>
        </div>

        {{-- Nama --}}
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $record->nama }}" name='nama' id="nama">
            </div>
        </div>


        {{-- Nomor --}}
        <div class="mb-3 row">
            <label for="no_wa" class="col-sm-2 col-form-label">Nomor WhatsApp</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value="{{ $record->no_wa }}" name='no_wa' id="no_wa">
            </div>
        </div>

        {{-- Fakultas --}}
        <div class="mb-3 row">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
                <select name="fakultas" class="form-control" required >
                    <option value="Ilmu Komputer dan Teknologi Informasi" @if($record->fakultas=='Ilmu Komputer dan Teknologi Informasi') selected @endif>{{ ('Ilmu Komputer dan Teknologi Informasi') }}</option>
                    <option value="Ekonomi" @if($record->fakultas=='Ekonomi') selected @endif> {{ __('Ekonomi') }}</option>
                    <option value="Teknologi Industri"@if($record->fakultas=='Teknologi Industri') selected @endif>{{ __('Teknologi Industri') }} </option>
                    <option value="Teknik Sipil dan Perencanaan" @if($record->fakultas=='Teknik Sipil dan Perencanaan') selected @endif>{{ __('Teknik Sipil dan Perencanaan') }} </option>
                    <option value="Psikologi"  @if($record->fakultas=='Psikologi') selected @endif>{{ __('Psikologi') }}</option>
                    <option value="Sastra" @if($record->fakultas=='Sastra') selected @endif>{{ __('Sastra') }}</option>
                    <option value="Komunikasi"  @if($record->fakultas=='Komunikasi') selected @endif>{{ __('Komunikasi') }}</option>
                </select>
            </div>
        </div>
        
        {{-- Jurusan --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
            <select name="jurusan"  class="form-control"required>
                <option value="Teknik Informatika"  @if($record->jurusan=='Teknik Informatika') selected @endif>{{ __('Teknik Informatika') }}</option>
                <option value="Sistem Informasi" @if($record->jurusan=='Sistem Informasi') selected @endif>{{ __('Sistem Informasi') }}</option>
                <option value="Ilmu Komputer" @if($record->jurusan=='Ilmu Komputer') selected @endif>{{ __('Ilmu Komputer') }}</option>
                <option value="Manajemen" @if($record->jurusan=='Manajemen') selected @endif>{{ __('Manajemen') }}</option>
                <option value="Akuntansi" @if($record->jurusan=='Akutansi') selected @endif>{{ __('Akutansi') }}</option></option>
                <option value="Ilmu Ekonomi" @if($record->jurusan=='Ilmu Ekonomi') selected @endif>{{ __('Ilmu Ekonomi') }}</option></option>
                <option value="Teknik Industri" @if($record->jurusan=='Teknik Industri') selected @endif>{{ __('Teknik Industri') }}</option></option>
                <option value="Arsitektur" @if($record->jurusan=='Arsitektur') selected @endif>{{ __('Arsitektur') }}</option></option>
                <option value="Teknik Sipil" @if($record->jurusan=='Teknik Sipil') selected @endif>{{ __('Teknik Sipil') }}</option></option>
                <option value="Psikologi" @if($record->jurusan=='Psikologi') selected @endif>{{ __('Psikologi') }}</option></option>
                <option value="Bahasa Inggris" @if($record->jurusan=='Bahasa Inggris') selected @endif>{{ __('Bahasa Inggris') }}</option></option>
                <option value="Komunikasi" @if($record->jurusan=='Komunikasi') selected @endif>{{ __('Komunikasi') }}</option></option>
            </select>
            </div>
        </div>
        

        {{-- Tingkat --}}
        <div class="mb-3 row">
            <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
            <div class="col-sm-10">
                <select class="form-select" name="tingkat" id="tingkat">
                    <option value="" disabled selected>PILIH TINGKAT</option>
                    <option value="1" @if($record->tingkat=='1') selected @endif>{{ __('1') }}</option>
                    <option value="2" @if($record->tingkat=='2') selected @endif>{{ __('2') }}</option>
                    <option value="3" @if($record->tingkat=='3') selected @endif>{{ __('3') }}</option>
                    <option value="4" @if($record->tingkat=='4') selected @endif>{{ __('4') }}</option>
                </select>
            </div>
        </div>
        

        {{-- Tanggal --}}
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Main</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="{{ $record->tanggal }}" name="tanggal" id="tanggal">
            </div>
        </div>
        

        {{-- Jam Mulai --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Mulai</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{$record->mulai}}" name='mulai' id="mulai">
            </div>
        </div>

        {{-- Jam Akhir --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Akhir</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{$record->akhir}}" name='akhir' id="akhir">
            </div>
        </div>

        {{-- KRS --}}
        <div class="mb-3 row">
            <label for="krs" class="col-sm-2 col-form-label">KRS (PDF)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="file_krs" id="file_krs"  value="{{ $record->file_krs }}" accept=".pdf">
                <a href="{{ asset('Krs/Files/'.$record->file_krs) }}">Lihat KRS</a></td>
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
