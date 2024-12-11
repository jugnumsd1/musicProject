@extends('layout')
@section('title')
    Music
@endsection
@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="mb-0">Music List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvassong" aria-controls="offcanvassong">+ Add New Song</button>
                    </div>
                </div>
                  <div class="offcanvas offcanvas-end on-rtl end" tabindex="-1" id="offcanvassong" aria-labelledby="offcanvassongLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvassongLabel">Add Song</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="admin-song.html">
                            <div class="mb-3">
                                <label for="esongname" class="form-label">Song Name:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="customFile1" class="form-label custom-file-input">Singer Profile:</label>
                                <input class="form-control" type="file" id="customFile1">
                            </div>
                            <div class="mb-3">
                                <label>Song Category:</label>
                                <select class="form-select" aria-label="exampleone">
                                    <option selected="" disabled="">Song Category</option>
                                    <option>Filmi Song</option>
                                    <option>Surf Song</option>
                                    <option>Sed Song</option>
                                    <option>Falling Song</option>
                                    <option>Rock songs</option>
                                    <option>Torch song</option>
                                    <option>Filmi Song</option>
                                    <option>Gospel song</option>
                                    <option>Carnival song</option>
                                    <option>Jazz songs&lrm;</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Song Writer:</label>
                                <select class="form-select" aria-label="exampletwo">
                                    <option selected="" disabled="">Song Writer:</option>
                                    <option>Filmi Song</option>
                                    <option>Surf Song</option>
                                    <option>Sed Song</option>
                                    <option>Falling Song</option>
                                    <option>Rock songs</option>
                                    <option>Torch song</option>
                                    <option>Filmi Song</option>
                                    <option>Gospel song</option>
                                    <option>Carnival song</option>
                                    <option>Jazz songs&lrm;</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Song Writer:</label>
                                <select class="form-select" aria-label="examplethree">
                                        <option selected="" disabled="">Song Singer</option>
                                    <option>Jhone Steben</option>
                                    <option>Attilio Marzi</option>
                                    <option>Normani</option>
                                    <option>Smith Steen</option>
                                    <option>David King</option>
                                    <option>Kusti Franti</option>
                                    <option>Lavis Nav</option>
                                    <option>Jhone Steben</option>
                                    <option>Jessie Reyez</option>
                                    <option>Smith Nayab</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="writerdescription" class="form-label">Writer Description:</label>
                                <textarea class="form-control" id="writerdescription" rows="5"></textarea>
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
                                <tr><th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Image</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Song Name: activate to sort column ascending">Song Name</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Genres: activate to sort column ascending">Genres</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Writer: activate to sort column ascending">Writer</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Singer: activate to sort column ascending">Singer</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Listener: activate to sort column ascending">Listener</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="reviews: activate to sort column ascending">reviews</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tbody>
                                
                                
                                
                                
                                
                                
                            <tr class="odd">
                                    <td class="sorting_1">01</td>
                                    <td><img src="{{asset('asset/images/16.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Heart Is Beating</td>
                                    <td>Romantic Song</td>
                                    <td>Edyta Gorniak</td>
                                    <td>Jhone Steben</td>
                                    <td>4.6k</td>
                                    <td>12</td>
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
                                    <td><img src="{{asset('asset/images/16.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>My Lovely Dad</td>
                                    <td>Filmi Song</td>
                                    <td>Norman Jonas</td>
                                    <td>Attilio Marci</td>
                                    <td>2.4k</td>
                                    <td>-</td>
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
                                    <td><img src="{{asset('asset/images/11.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Way Of Right</td>
                                    <td>Rock Songs</td>
                                    <td>Ella Mai</td>
                                    <td>Smith Steen</td>
                                    <td>2.1k</td>
                                    <td>08</td>
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
                                    <td><img src="{{asset('asset/images/09.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Everything I Want</td>
                                    <td>Party Song</td>
                                    <td>Michael Semis</td>
                                    <td>Kostis Frantic</td>
                                    <td>1.9k</td>
                                    <td>02</td>
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
                                    <td><img src="{{asset('asset/images/37.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>The Mountain Road</td>
                                    <td>Travel Song</td>
                                    <td>Billie Eilis</td>
                                    <td>Lavish Nav</td>
                                    <td>1.2k</td>
                                    <td>01</td>
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
                                    <td><img src="{{asset('asset/images/39.png')}}" class="img-fluid avatar-50 rounded-3" alt="data-table-image"></td>
                                    <td>Passion Of Work</td>
                                    <td>Relax Song</td>
                                    <td>Ava Max</td>
                                    <td>Jessie Reyes</td>
                                    <td>4.6k</td>
                                    <td>03</td>
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
                                </tr></tbody>
                        </table></div><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="datatable_next"><a aria-controls="datatable" aria-disabled="true" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div class="clear"></div></div>
                    </div>
                </div>
            </div>
    </div>
                </div>
@endsection