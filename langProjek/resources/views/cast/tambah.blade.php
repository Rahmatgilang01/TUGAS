@extends('layouts.master')

@section('title')
Halaman Tambah Cast
@endsection

@section('content')

<form method="POST" action="/cast">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errprs)
            <li>{{$errors}}</li>
            @endforeach
        </ul>
    @endif  

    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="nama" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="umur" class="form-control" name="umur">
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection