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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <div class="card-header">
                                <h3>Users Management
                                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">
                                        <i class="fa fa-plus-circle"></i> New User
                                    </a>
                                </h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $user)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td>
                                                    @if(!empty($user->getRoleNames()))
                                                        @foreach($user->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>


                                                <td>
                                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {!! $data->render() !!}

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif



    </div>


@endsection
