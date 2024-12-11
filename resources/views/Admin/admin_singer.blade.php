@extends('layout')
@section('title')
    Singers list
@endsection

@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">

    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="mb-0">Singer List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvassinger" aria-controls="offcanvassinger">+ Add New Singer</button>
                    </div>
                </div>
                  <div class="offcanvas offcanvas-end on-rtl end" tabindex="-1" id="offcanvassinger" aria-labelledby="offcanvassingerLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvassingerLabel">Add Singer</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="admin-singer.html">
                            <div class="mb-3">
                                <label for="singername" class="form-label">Singer Name:</label>
                                <input type="email" class="form-control" id="singername" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail3">Email Input:</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" value="markjhon@gmail.com" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="customFile1" class="form-label custom-file-input">Singer Profile:</label>
                                <input class="form-control" type="file" id="customFile1">
                            </div>
                             <div class="mb-3">
                                <label class="form-label" for="exampleInputdate">Date Input:</label>
                                <input type="date" class="form-control" id="exampleInputdate" value="mm/dd/yyyy">
                            </div>
                            <div class="mb-3">
                                <label for="singerdescription" class="form-label">Singer Description:</label>
                                <textarea class="form-control" id="singerdescription" rows="5"></textarea>
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
                                <tr><th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Profile: activate to sort column ascending">Profile</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Singer Name: activate to sort column ascending">Singer Name</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Songs: activate to sort column ascending">Songs</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Albums: activate to sort column ascending">Albums</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Reviews: activate to sort column ascending">Reviews</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                                
                                
                                
                                
                                
                                
                            <tr class="odd">
                                    <td class="sorting_1">01</td>
                                    <td><img src="{{asset('asset/images/38.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Eliana D’Cruz</td>
                                    <td>eliana@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <i class="fas fa-pen"></i>

                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><tr class="even">
                                    <td class="sorting_1">02</td>
                                    <td><img src="{{asset('asset/images/39.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Alex Williams</td>
                                    <td>alex@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-pen"></i>

                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">03</td>
                                    <td><img src="{{asset('asset/images/40.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Omen Smith</td>
                                    <td>omen@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-pen"></i>

                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><tr class="even">
                                    <td class="sorting_1">04</td>
                                    <td><img src="{{asset('asset/images/41.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Alexa Jonas</td>
                                    <td>alexa@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <i class="fas fa-pen"></i>

                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">05</td>
                                    <td><img src="{{asset('asset/images/42.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>koruna truss</td>
                                    <td>koruna@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-pen"></i>

                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><tr class="even">
                                    <td class="sorting_1">06</td>
                                    <td><img src="{{asset('asset/images/43.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Vibrato Eruct</td>
                                    <td>vibrato@demo.com</td>
                                    <td>68</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash"></i>

                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                               <i class="fas fa-pen"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr></tbody>
                        </table></div><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="datatable_next"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div class="clear"></div></div>
                    </div>
                </div>
            </div>
            
    </div>
    
                </div>
@endsection