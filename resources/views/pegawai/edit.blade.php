@extends('layouts.master')

@section('content')
    <h1>Edit Data Pegawai</h1>
    <div class="row">
      <div class="col-lg-12">
      <form action="/pegawai/{{$pegawai -> id}}/update" method="POST">
      {{csrf_field()}}
       <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$pegawai->nama}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">NIP</label>
    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP" value="{{isset($pegawai->user->nip)?ucfirst($pegawai->user->nip):''}}">
</div>
<div class="form-group">

    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email"value="{{isset($pegawai->user->email)?ucfirst($pegawai->user->email):''}}" >
</div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="Laki - laki" @if($pegawai-> jenis_kelamin =='Laki - laki') selected @endif>Laki-laki</option>
      <option value="Perempuan" @if($pegawai-> jenis_kelamin =='Perempuan') selected @endif>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Agama</label>
    <select name="agama" class="form-control" id="exampleFormControlSelect1" value="{{$pegawai->agama}}">
      <option value="1" @if($pegawai-> agama =='1') selected @endif>Islam</option>
      <option value="2" @if($pegawai-> agama =='2') selected @endif>Budha</option>
      <option value="3" @if($pegawai-> agama =='3') selected @endif>Hindu</option>
      <option value="4" @if($pegawai-> agama =='4') selected @endif>Kristen Katolik</option>
      <option value="5" @if($pegawai-> agama =='5') selected @endif>Kristen Protestan</option>
      <option value="6" @if($pegawai-> agama =='6') selected @endif>Konghucu</option>
    </select>
    </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pegawai->alamat}}</textarea>
</div>
 <div class="form-group">
<label for="masuk_kerja">Masuk Kerja</label>
  <input type="date" id="masuk_kerja" name="masuk_kerja"value="{{$pegawai->masuk_kerja}}">
</div>
<div class="modal-footer">
            <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
  </div>

@endsection
