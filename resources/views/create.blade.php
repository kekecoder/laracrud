@extends('layouts.app')

@section('content')
    <form action="/create" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" value="{{ old('firstname') }}" id="" class="form-control @error('firstname')
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
                    <input type="text" name="lastname" value="{{ old('lastname') }}" id="" class="form-control @error('lastname')
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
            <input type="email" name="email" id="" value="{{ old('email') }}" class="form-control @error('email')
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
            @enderror" style="resize: none">{{ old('address') }}</textarea>
            <small class="invalid-feedback">
                @error('address')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection