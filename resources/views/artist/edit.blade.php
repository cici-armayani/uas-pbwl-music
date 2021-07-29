@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>EDIT DATA ARTIST</h3>  
        <form action="{{ url('/artist/' . $row->id) }}" method="POST">
            <input type="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group">
                <label for="">ID ARTIST</label>
                <input type="text" name="artist_id" class="form-control" value="{{ $row->id}}" >
            </div>
            <div class="form-group">
                <label for="">NAMA ARTIST</label>
                <input type="text" name="artist_name" class="form-control" value="{{ $row->name}}">
            </div>
            <div class="form-group">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>


 @endsection 