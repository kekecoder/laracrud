@extends('layouts.app')

@section('content')
   @if (session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
   @endif
   @if (session('delete'))
      <div class="alert alert-danger">
         {{ session('delete') }}
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
         <th scope="col">Action</th>
      </tr>
      @foreach ($crud as $i => $app)
      <tr>
         <th scope="row">{{ $i + 1 }}</th>
         <td>{{ $app['firstname'] }}</td>
         <td>{{ $app['lastname'] }}</td>
         <td>{{ $app['email'] }}</td>
         <td><a href="/show/{{ $app['id'] }}" class="btn btn-primary">View</a></td>
      </tr>
      @endforeach
   </table>
   <div class="d-flex justify-content-end">
      {{ $crud->links() }}
   </div>
@endsection