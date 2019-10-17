@extends('admin.master-admin')

@section('pageTitle', 'Pages List')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Page List</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New Page</a>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Total Active Pages -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Active Pages</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-file fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Published Pages -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Published</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countPublished}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Draft Pages -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Draft Pages</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$countUnpublished}}</div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-edit fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Trash -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Trash</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countArchive}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-trash-alt fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">

        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">All Pages</h6>
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
            

              <table class="table table-bordered table-striped table-custom">
                <thead>
                  <tr>
                    <th width="10%">Sl. No.</th>
                    <th width="55%">Title</th>
                    <th width="13%">Author</th>
                    <th width="10%">Date</th>
                    <th width="12%">Edit</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($pages as $item)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->title }}</td>
                          <td>{{ $item->admin_id }}</td>
                          <td>
                            @php
                                echo date('d-m-Y', strtotime($item->created_at));
                            @endphp                              
                          </td>
                          <td>
                            <div class="overflow-hidden">
                              <a class="btn btn-primary float-left" href="{{ route('edit_page', ['id' => $item->id]) }}" title="Edit"><i class="fas fa-edit"></i></a>

                              <form class="ml-1 form-delete-category float-left" action="{{ route('delete_page', ['id' => $item->id]) }}" method="post">
                                  <button class="btn btn-danger" type="submit" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                  @method('delete')
                                  @csrf
                              </form>
                            </div>
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

  <script>
      $( document ).ready( function () {
          $(".form-delete-category").on("submit", function(){
              return confirm("Are you sure?");
          });
      } );
  </script>  

@endsection