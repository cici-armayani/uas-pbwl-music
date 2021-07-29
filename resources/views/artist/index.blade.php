@extends('layouts.app')

@section('content')

    <div class="container"> 
        <h3>DATA ARTIST
        <a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right">TAMBAH DATA</a>

        </h3> 


          <table class="table table-bordered"> 
               <tr>
                        <th>ID ARTIST</th>
						<th>NAMA ARTIST</th>
                        <th>EDIT</th>
                        <th>DELETE</th>                        
               </tr>
				 
             @foreach($rows as $row) 
                 <tr> 
                        <td>{{ $row->artist_id }}</td>
                        <td>{{ $row->artist_name}}</td> 
                        <td><a href="{{ url('artist/' . $row->id . '/edit') }}"class="btn btn-primary btn-sm float-right" >EDIT</a></td>
                        <td>
                        <form action="{{ url('/artist/' . $row->id) }}" method="POST"> 
                        <input name="_method" type="hidden" value="DELETE"> 
                        @csrf 
                        <button class="btn btn-danger btn-sm" >DELETE</button> 
                        </form> 
                        </td>
 
                    </tr> 
             @endforeach 
            </table>
    </div>
@endsection