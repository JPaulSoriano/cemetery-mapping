@extends('layouts.app')
 
@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        
        <a class="btn btn-success my-2" href="{{ route('sectors.create') }}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Lot</th>

            </tr>
            @foreach ($sectors as $sector)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sector->name }}</td>
                <td>{{ $sector->lot->name }}</td>
            </tr>
            @endforeach
        </table>
        {!! $sectors->links() !!}
    </div>
      
@endsection