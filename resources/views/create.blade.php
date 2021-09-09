@extends('layout.main')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="/"> Back</a>
        </div>
    </div>
</div>
 
 
<form action="/mahasiswa/create" method="POST">
    @csrf  
    @method('POST')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas :</strong>
                <input type="text" name="kelas" class="form-control" placeholder="Enter Kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan :</strong>
                <input type="text" name="jurusan" class="form-control" placeholder="Enter Jurusan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Angkatan :</strong>
                <input type="text" name="angkatan" class="form-control" placeholder="Enter Angkatan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No HP :</strong>
                <input type="number" name="no_hp" class="form-control" placeholder="Enter No HP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Enter Alamat"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection