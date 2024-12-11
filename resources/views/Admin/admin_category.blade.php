@extends('layout')
@section('title')
    Category
@endsection
@section('content')
<div class="content-inner pb-0 container-fluid " id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="card-header mb-5 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h4 class="mb-0">Category List</h4>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvascategory" aria-controls="offcanvascategory">+ Add New Category</button>
                </div>
                <div class="offcanvas offcanvas-end on-rtl end" tabindex="-1" id="offcanvascategory" aria-labelledby="offcanvascategoryLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvascategoryLabel">Add New Category</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Category Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
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
                                <tr class="bg-white"><th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Song Category: activate to sort column ascending">Song Category</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Category Description: activate to sort column ascending">Category Description</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                                
                                
                               <tr>
                                @foreach ($categorys as $categoryitem)
                                <td>{{$categoryitem->id}}</td>

                                    <td>{{$categoryitem->name}}</td>
                                    <td>{{$categoryitem->description}}</td>

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
                                @endforeach
                               </tr>
                                 
                               
                                    
                            <tr class="odd">
                                    <td class="sorting_1">01</td>
                                    <td>Jhone Steben</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
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
                                    <td>Romantic Songs</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
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
                                    <td class="sorting_1">03</td>
                                    <td>sad songs</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
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
                                    <td>Travel Songs</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
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
                                    <td>Relax Songs</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
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
                                    <td class="sorting_1">06</td>
                                    <td>Retro songs</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 new">
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                            </a>
                                            <a class="btn btn-soft-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                                <span class="btn-inner">
                                                    <i class="fas fa-trash fa-sm"></i>
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
    
                </div>
@endsection