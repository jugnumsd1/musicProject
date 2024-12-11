@extends('layout')
@section('title', 'Artist')

@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="mb-0">Artist List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasartist" aria-controls="offcanvasartist">
                            + Add New Artist
                        </button>
                    </div>
                </div>

                <!-- Add Artist Offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasartist" aria-labelledby="offcanvasartistLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvasartistLabel">Add Artist</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="{{ route('artists.index') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="artistname" class="form-label">Artist Name:</label>
                                <input type="text" class="form-control" id="artistname" name="name" placeholder="Enter artist name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail3" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="customFile1" class="form-label">Artist Profile Picture:</label>
                                <input class="form-control" type="file" id="customFile1" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="addsong" class="form-label">Add Song:</label>
                                <input type="file" class="form-control" id="addsong" name="addsong" accept="audio/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>

                <div class="card-body px-0">
                    <div class="table-data-top table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Artist Name</th>
                                    <th>Email</th>

                                    <th>Profile</th>
                                    <th>Song</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                @foreach ($artists as $Item)
                                <tr>
                                        <td>{{ $Item->id }}</td>
                                        <td>{{ $Item->name }}</td>
                                        <td>{{ $Item->email }}</td>

                                        <td>
                                            @if ($Item->image)
                                                <img src="{{ asset('storage/' . $Item->image) }}" alt="User Image" width="50" height="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            @if ($Item->addsong)
                                                <a href="{{ asset('storage/' . $Item->addsong) }}" target="_blank">Play Song</a>
                                            @else
                                                No Song
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            <button class="btn btn-soft-danger btn-icon btn-sm rounded-pill ms-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tr><tr class="odd">
                                <td class="sorting_1">03</td>
                                <td><img src="{{asset('asset/images/writer-3.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                <td>Ichae Semos</td>
                                <td>ichae@demo.com</td>
                                <td>Jan 7, 1972</td>
                                <td>20</td>
                                <td>20</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                            <span class="btn-inner">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                        </a>
                                        <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                            <span class="btn-inner">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
