@extends('layouts.app')

@section('content')
   @if (session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
   @endif
   <a href="/create" class="btn btn-secondary mb-4">
      Create
   </a>
   <table class="table table-striped">
      <tr>
         <th scope="col">#</th>
         <th scope="col">Firstname</th>
         <th scope="col">Lastname</th>
         <th scope="col">Email</th>
         <th scope="col">Address</th>
         <th scope="col">Date</th>
         <th scope="col"></th>
      </tr>
      @foreach ($crud as $i => $app)
      <tr>
         <th scope="row">{{ $i + 1 }}</th>
         <td>{{ $app['firstname'] }}</td>
         <td>{{ $app['lastname'] }}</td>
         <td>{{ $app['email'] }}</td>
         <td>{{ $app['address'] }}</td>
         <td>{{ $app['created_at'] }}</td>
         <td>
            <button class="btn btn-primary d-inline">Edit</button>
            <button class="btn btn-danger d-inline">Delete</button>
         </td>
      </tr>
      @endforeach
   </table>
@endsection