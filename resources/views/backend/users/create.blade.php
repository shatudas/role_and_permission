@extends('backend.layouts.app')
@section('content')


    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid mt-5">

               <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h3> Create User
                                    <a href="{{ route('users.index') }}" class=" btn btn-primary btn-sm float-right">
                                        <i class="fa fa-list"></i>  List View
                                    </a>
                                </h3>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('users.store') }}" id="myForm">
                                @csrf

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="name"> Name <span style="color:red;">*</span> </label>
                                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Name">
                                            <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="email"> Email <span style="color:red;">*</span> </label>
                                            <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Name">
                                            <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="password"> Password <span style="color:red;">*</span> </label>
                                            <input type="password" name="password" class="form-control form-control-sm" placeholder="Enter PAssword">
                                            <font style="color:red">{{ ($errors->has('password'))?($errors->first('password')):'' }}</font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="confirm-password"> Re-Password <span style="color:red;">*</span> </label>
                                            <input type="password" name="confirm-password" class="form-control form-control-sm" placeholder="Repassword">
                                            <font style="color:red">{{ ($errors->has('confirm-password'))?($errors->first('confirm-password')):'' }}</font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="role"> Roles <span style="color:red;">*</span> </label>
                                            <select name="roles[]" multiple="multiple" class="form-control form-control-sm select2 text-dark" data-placeholder="Select Role">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role }}">
                                                        {{ $role }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <font style="color:red">{{ ($errors->has('role')) ? ($errors->first('role')) : '' }}</font>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="submit" value="Upload"  class="btn btn-primary">
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong>Something went wrong.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif


    </div>


@endsection
