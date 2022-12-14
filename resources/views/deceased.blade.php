@extends('layouts.app')
 
@section('content')
   <div class="container my-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        
        <table class="table table-bordered" id="deceased">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Born</th>
                    <th>Died</th>
                    <th>Lot</th>
                    <th>Sector</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($persons as $person)
                <tr>
                    <td>{{ $person->full_name }}</td>
                    <td>{{ $person->born }}</td>
                    <td>{{ $person->died }}</td>
                    <td>{{ $person->sector->lot->name }}</td>
                    <td>{{ $person->sector->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
      
@endsection