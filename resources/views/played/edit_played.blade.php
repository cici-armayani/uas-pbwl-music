@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>EDIT DATA PLAYED</h3>  
        <form action="{{ url('/played/' . $row->id) }}" method="POST">
            <input type="_method" type="hidden" value="PATCH">
          @csrf
            <div class="form-group">
                <label for="">ID ALBUM</label> 
                <input type="text" name="album_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="">ID TRACK</label> 
                <input type="text" name="track_id" class="form-control">
            </div> 
            <div class="form-group">
                <label for="">PLAYED</label> 
                <input type="text" name="played" class="form-control">
            </div> 
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>


 @endsection 