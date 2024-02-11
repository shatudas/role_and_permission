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
                                <h3> Product
                                    @can('product-create')
                                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">
                                            <i class="fa fa-plus-circle"></i> New Product
                                        </a>
                                    @endcan
                                </h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Detail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->detail }}</td>
                                                <td>


                                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>


                                                @can('product-edit')
                                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                                @endcan

                                                @can('product-delete')
                                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                @endcan

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {!! $products->links() !!}

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
