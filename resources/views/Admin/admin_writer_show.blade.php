@extends('layout')
@section('title')
    Writer Edit
@endsection
@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">

    <div class="row mb-3 justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit User</h4>
                </div>
                <div class="card-body">
                    <!-- Form to Edit User Data -->
                    <form action="{{ route('writers.update', $writer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- For update operation -->

                        <!-- User Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label text-start">writer Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $writer->name) }}" required>
                        </div>

                        <!-- User Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label text-start">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $writer->email) }}" required>
                        </div>

                        <!-- User Profile Picture (Existing Image) -->
                        <div class="mb-3">
                            <label for="image" class="form-label text-start">writer Profile Picture:</label>
                            <input class="form-control" type="file" id="image" name="image">
                            <!-- Show the existing image if available -->
                            @if ($writer->image)
                                <img src="{{ asset('storage/' . $writer->image) }}" alt="User Image" width="100" class="mt-2">
                            @else
                                <p>No image uploaded</p>
                            @endif
                        </div>

                        <!-- User Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label text-start">Writer Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $writer->description) }}</textarea>
                        </div>

                        <!-- Submit and Reset buttons -->
                        <button type="submit" class="btn btn-primary">Update writer</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection