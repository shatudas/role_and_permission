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
                    <div class="col-8">
                        <div class="card">

                            <div class="card-header">
                                <h3> View User
                                    <a href="{{ route('users.index') }}" class=" btn btn-primary btn-sm float-right">
                                        <i class="fa fa-list"></i>  Back
                                    </a>
                                </h3>
                            </div>

                            <div class="card-body">

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="name"> Name <span style="color:red;">*</span> </label>
                                            <span>{{ $user->name }}</span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="email"> Email <span style="color:red;">*</span> </label>
                                            <span>{{ $user->email }}</span>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="email"> Roles <span style="color:red;">*</span> </label>
                                            @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </div>



                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>





    </div>


@endsection
