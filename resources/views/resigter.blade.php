@extends('layouts.app')

@section('pageTitle', 'Resigter')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h3>About</h3><hr>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-5">
                    @if ( session()->has('del-msg') )
                        <div class="alert alert-success" role="alert">
                            {{ session('del-msg') }}
                        </div>
                    @endif
                    <p class="h4 mb-4">Registered Users</p>
                    <ol>
                        @foreach ($users as $item)    
                           <li>
                                <p>{{ $item->first_name }} {{ $item->last_name }}</p>
                                
                                @if ( !empty($item->image_file_name) )
                                <p><img src="uploads/{{ $item->image_file_name }}" width="240" /></p>
                                @endif

                               <form class="ml-1 form-delete-category" action="{{ route('delete_user', ['id' => $item->id]) }}" method="post">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    @method('delete')
                                    @csrf
                                </form>
                            </li><hr>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="col-6">

                @if ( session()->has('msg') )
                    <div class="alert alert-success" role="alert">
                        {{ session('msg') }}
                    </div>
                @endif

                @if ( count($errors) > 0 )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Default form register -->
                <form action="{{ route('registration') }}" method="POST" class="text-center border border-light p-5" enctype="multipart/form-data">
                    @csrf
                    <p class="h4 mb-4">User Registration Form</p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="defaultRegisterFormFirstName" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="defaultRegisterFormLastName" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" name="defaultRegisterFormEmail" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <input type="password" name="password_confirmation" id="confirmRegisterFormPassword" class="form-control mb-4" placeholder="Re-type Password" aria-describedby="confirmRegisterFormPasswordHelpBlock">

                    <input type="file" name="productImage" id="productImage" class="form-control">

                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit">Register</button>    

                </form>
                <!-- Default form register -->

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