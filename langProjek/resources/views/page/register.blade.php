@extends('layouts.master')
@section('title')
Buat Account Baru!
@endsection
@section('content')
<h3>Sign Up Form</h3>
<form method="post" action="/welcome">
    @csrf
    <label>First name:</label><br><br>
    <input type="text" name="firstname"/><br>
    <br>
    <label>Last name:</label><br><br>
    <input type="text" name="lastname"/><br>
    <br>
    <label>Gender:</label><br><br>
    <input type="radio" value="1" name="Gender"/>Male<br>
    <input type="radio" value="2" name="Gender"/>Female<br> 
    <input type="radio" value="3" name="Gender"/>Other<br>
    <br>
    <label>Nationality:</labe><br><br>
        <select name="Nationality">
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">Singapore</option>
        </select><br><br>
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" value="1" name="Language Spoken"/>Bahasa Indonesia<br>
    <input type="checkbox" value="2" name="Language Spoken"/>English<br>
    <input type="checkbox" value="3" name="Language Spoken"/>Other<br>
    <br><br>
    <label>Bio:</label><br>
    <br>
    <textarea name="bio" cols="25" rows="10"></textarea>
    <br>
    <input type="submit" value="Sign Up"/>
</form> 
@endsection