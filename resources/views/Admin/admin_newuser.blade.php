@extends('layout')
@section('title')
New Users
@endsection

@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">

    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="mb-0">User List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaswriter" aria-controls="offcanvaswriter">+ Add New User</button>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end on-rtl end" tabindex="-1" id="offcanvaswriter" aria-labelledby="offcanvaswriterLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvaswriterLabel">Add User</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- In your Blade view (admin_writer page) -->
                        <form action="{{ route('newuser.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- CSRF token for security -->
                            <div class="mb-3">
                                <label for="writername" class="form-label">User Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter writer name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail3" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="customFile1" class="form-label">User Profile Picture:</label>
                                <input class="form-control" type="file" id="customFile1" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">User Description:</label>
                                <textarea class="form-control" id="writerdescription" name="description" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
        
                        </form>
                        
                    </div>
                </div>

                <div class="card-body px-0">
                    <div class="table-data-top table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="dataTables_length" id="datatable_length">
                                        <label>Show 
                                            <select name="datatable_length" aria-controls="datatable" class="form-select form-select-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="datatable_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive my-3">
                                <table class="table mb-0 dataTable no-footer" id="datatable" data-toggle="data-table" aria-describedby="datatable_info">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Profile: activate to sort column ascending">Profile</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Writer Name: activate to sort column ascending">User Name</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newusers as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>
                                                    @if ($item->image)
                                                        <img src="{{ asset('storage/' . $item->image) }}" alt="User Image" width="50" height="50">
                                                    @else
                                                        No image
                                                    @endif
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>                  
                                              
                                                <td>
                                                   
                                                  <a href="{{ route('newuser.show', $item->id) }}" > <i class="fas fa-pen btn"></i></a>
                                                 
                                                    <form action="{{ route('newuser.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                          <i class="fas fa-trash color-" type="submit" class="bg-danger" onclick="return confirm('Are you sure you want to delete this user?')"></i> 
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
