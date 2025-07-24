@extends('admin.admin_master')
@section('admin')


<div class="content">

    <div class="">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">All Product Datatable</h5>
                        <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill me-4">+ Add Product</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Title</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($product as $key=>$item)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Str::limit($item->title, 20, '...')}}</td>
                                        <td>{{ Str::limit($item->name, 50, '...')}}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="" style="width:50px; height:40px;"></td>
                                        <td class="text-end">{{ Str::limit(number_format($item->price, 0, ',', '.')) }} VND</td>
                                        <td>
                                            <a href="{{ route('edit.product', $item->id) }}" class="btn btn-primary rounded-pill">Edit</a>
                                            <a href="{{ route('delete.product', $item->id) }}" class="btn btn-danger rounded-pill">Delete</a>
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
    </div>

    

</div>


@endsection