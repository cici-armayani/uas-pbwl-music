@extends('layouts.app')

@section('content') 

<div class="container"> 
    

    <h3>TAMBAH DATA TRACK</h3> 
    <form action="{{ url('/track') }}" method="POST"> 
    @csrf
	 <div class="form-group">
         <label>ID TRACK</label> 
         <input type="text" name="track_id" class="form-control">
    </div>
    <div class="form-group">
         <label>NAMA TRACK</label> 
         <input type="text" name="track_name" class="form-control">
    </div>
    <div class="form-group">
         <label>ID ARTIST</label> 
         <input type="text" name="artist_id" class="form-control">
    </div> 
    <div class="form-group">
         <label>ID ALBUM</label> 
         <input type="text" name="album_id" class="form-control">
    </div> 
    <div class="form-group">
         <label>TIME</label> 
         <input type="text" name="time" class="form-control">
    </div> 
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form> 
</div> 

@endsection