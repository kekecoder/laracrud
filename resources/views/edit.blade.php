@extends('layouts.app')
@section('content')
    <form action="/edit/{{ $crud->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" value="{{ $crud->firstname }}" id="" class="form-control @error('firstname')
                        is-invalid
                    @enderror">
                    <small class="invalid-feedback">
                        @error('firstname')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">lastname</label>
                    <input type="text" name="lastname" value="{{ $crud->lastname }}" id="" class="form-control @error('lastname')
                        is-invalid
                    @enderror">
                    <small class="invalid-feedback">
                        @error('lastname')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="" value="{{ $crud->email }}" class="form-control @error('email')
                is-invalid
            @enderror">
            <small class="invalid-feedback">
                @error('email')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address')
                is-invalid
            @enderror" style="resize: none">{{ $crud->address }}</textarea>
            <small class="invalid-feedback">
                @error('address')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="mt-3">
            <button class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection