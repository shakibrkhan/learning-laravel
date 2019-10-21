@extends('admin.master-admin')

@section('pageTitle', 'Add Page')

@section('content')

    <div class="container-fluid">
        
            <!-- Content Row -->
            <div class="row">
                
                <div class="col-xl-12 col-lg-12">

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Page</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card Body -->
                        <div class="card-body">
                            
                            <!-- Default edit form -->
                        <form action="{{ route('save_page') }}" method="POST" class="text-center border border-light p-5" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="pageTitle" id="pageTitle" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="pageslug" id="pageslug" class="form-control" placeholder="Slug">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea class="form-control" name="pageDescription" id="pageDescription" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <select name="pageStatus" id="pageStatus" class="form-control">
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>       
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="file" name="featuredtImage" id="featuredtImage" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="pageSeoTitle" id="pageSeoTitle" class="form-control" placeholder="SEO Title">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea class="form-control" name="pageSeoDescription" id="pageSeoDescription" placeholder="SEO Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <button class="btn btn-primary my-2 py-2 px-4" type="submit">Save</button>
                                    </div>
                                </div>                                

                            </form>
                            <!-- // Default edit form -->            
                        </div>
                    </div>
        
                </div>

            </div>
    </div>

@endsection