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
                                <h3> Create Roles
                                    <a href="{{ route('roles.index') }}" class=" btn btn-primary btn-sm float-right">
                                        <i class="fa fa-list"></i> List View
                                    </a>
                                </h3>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('roles.store') }}" id="myForm">
                                @csrf

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="name"> Name <span style="color:red;">*</span> </label>
                                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Name">
                                            <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="confirm-password"> Permission <span style="color:red;">*</span> </label>
                                                <br>
                                                @foreach($permission as $value)
                                                    <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="name">{{ $value->name }}
                                                    <br/>
                                                @endforeach
                                            <font style="color:red">{{ ($errors->has('permission'))?($errors->first('permission')):'' }}</font>
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
