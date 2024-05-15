@extends('users.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New User</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="inputLastName" class="form-label"><strong>Last Name:</strong></label>
            <input 
                type="text" 
                name="last_name" 
                class="form-control @error('last_name') is-invalid @enderror" 
                id="inputLastName" 
                placeholder="Last Name">
            @error('last_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputFirstName" class="form-label"><strong>First Name:</strong></label>
            <input 
                type="text" 
                name="first_name" 
                class="form-control @error('first_name') is-invalid @enderror" 
                id="inputFirstName" 
                placeholder="First Name">
            @error('first_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputAge" class="form-label"><strong>Age:</strong></label>
            <input 
                type="number" 
                name="age" 
                class="form-control @error('age') is-invalid @enderror" 
                id="inputAge" 
                placeholder="Age">
            @error('age')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  
  </div>
</div>
@endsection
