@extends('layout')
@section('title')
    Writer
@endsection
@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">

    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="mb-0">Writer List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaswriter" aria-controls="offcanvaswriter">+ Add New Writer</button>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end on-rtl end" tabindex="-1" id="offcanvaswriter" aria-labelledby="offcanvaswriterLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvaswriterLabel">Add Writer</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- In your Blade view (admin_writer page) -->

<form action="{{ route('writers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- CSRF token for security -->
    <div class="mb-3">
        <label for="writername" class="form-label">Writer Name:</label>
        <input type="text" class="form-control" id="writername" name="name" placeholder="Enter writer name" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail3" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Enter Email" required>
    </div>
    <div class="mb-3">
        <label for="customFile1" class="form-label">Writer Profile Picture:</label>
        <input class="form-control" type="file" id="customFile1" name="image">
    </div>
    <div class="mb-3">
        <label for="exampleInputdate" class="form-label">Date of Birth:</label>
        <input type="date" class="form-control" id="exampleInputdate" name="date" required>
    </div>
    <div class="mb-3">
        <label for="writerdescription" class="form-label">Writer Description:</label>
        <textarea class="form-control" id="writerdescription" name="description" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</form>

                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="table-data-top table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="table-responsive my-3"><table class="table mb-0 dataTable no-footer" id="datatable" data-toggle="data-table" aria-describedby="datatable_info">
                            <thead>
                                <tr><th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Profile: activate to sort column ascending">Profile</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Writer Name: activate to sort column ascending">Writer Name</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending">Date Of Birth</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Songs: activate to sort column ascending">Songs</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Albums: activate to sort column ascending">Albums</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                         
                                
                                    @foreach ($writers as $writerItem)
                                    <tr>
                                    <td>{{$writerItem->id}}</td>
                                    <td><img src="{{ asset('storage/' . $writerItem->image) }}" alt="Writer Image" width="60" height="60" /></td>
                                     <td>{{$writerItem->name}}</td>
                                        <td>{{$writerItem->email}}</td>
                                        <td>{{$writerItem->date}}</td>  <!-- Changed to date_of_birth to match your model -->
                                       <!-- Corrected to description -->
                                      
                                       <td>20</td>
                                       <td>20</td>
                                       <td>
                                        <div class="d-flex align-items-center gap-2"> <!-- Reduce gap here -->
                                            <!-- Edit button -->
                                            <a href="{{ route('writers.show', $writerItem->id) }}" class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-1" role="button">
                                                <i class="fas fa-pen btn"></i>
                                            </a>
                                            
                                            <!-- Delete form -->
                                            <form action="{{ route('writers.destroy', $writerItem->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE') <!-- Use DELETE method -->
                                                <button type="submit" class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-1" onclick="return confirm('Are you sure you want to delete this writer?');">
                                                    <i class="fas fa-trash btn text-danger" style="font-size: 16px;"></i>
                                                </button>
                                            </form>
                                        </div>
                                        
                                        
                                       </td>
                                    </tr>
                                       @endforeach
                               
                                
                                
                                
                            <tr class="odd">
                                    <td class="sorting_1">01</td>
                                    <td><img src="{{asset('asset/images/writer-1.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                    <td>Jhone Steben</td>
                                    <td>jhon@demo.com</td>
                                    <td>Jan 9, 1968</td>
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
                                </tr><tr class="even">
                                    <td class="sorting_1">02</td>
                                    <td><img src="{{asset('asset/images/writer-2.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                    <td>John Klok</td>
                                    <td>Johnklik@demo.com</td>
                                    <td>Feb 12, 1970</td>
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
                                                <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
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
                                </tr><tr class="even">
                                    <td class="sorting_1">04</td>
                                    <td><img src="{{asset('asset/images/writer-4.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                    <td>Jules Boutin</td>
                                    <td>jules@demo.com</td>
                                    <td>Feb 15, 1977</td>
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
                                </tr><tr class="odd">
                                    <td class="sorting_1">05</td>
                                    <td><img src="{{asset('asset/images/writer-5.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                    <td>Kusti Franti</td>
                                    <td>kusti@demo.com</td>
                                    <td>Mar 13, 1985</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
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
                                </tr><tr class="even">
                                    <td class="sorting_1">06</td>
                                    <td><img src="{{asset('asset/images/writer-6.png')}}" class="img-fluid rounded-3" alt="data-table-image"></td>
                                    <td>David King</td>
                                    <td>david@demo.com</td>
                                    <td>Apr 8, 1980</td>
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
                                   
                                                                                        </form>




                                </tr></tbody>
                        </table></div><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="datatable_next"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div class="clear"></div></div>
                    </div>
                </div>
            </div>
           </div>
    </div>
    
                </div> 
@endsection