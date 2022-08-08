@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-secondary mb-3">Go Back Home</a>
    @if (session('updated'))
      <div class="alert alert-secondary">
         {{ session('updated') }}
      </div>
    @endif
    <div class="card text-center">
        <div class="card-header">
            <span class="text-uppercase">{{ $crud->firstname }} information</span>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th scope="col">Firstname</th>
                    <td scope="row">{{ $crud->firstname }}</td>
                </tr>
                <tr>
                    <th>Lastname</th>
                    <td>{{ $crud->lastname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $crud->email }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $crud->address }}</td>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <a href="/edit/{{ $crud->id }}" class="btn btn-secondary">Edit</a>
                <form action="/delete/{{ $crud->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-muted">
             {{ $date }}
        </div>
    </div>
@endsection