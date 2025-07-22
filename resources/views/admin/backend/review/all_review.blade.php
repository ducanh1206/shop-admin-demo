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
                        <h5 class="card-title mb-0">All Review Datatable</h5>
                        <a href="{{ route('add.review') }}" class="btn btn-primary rounded-pill me-4">+ Add Review</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($review as $key=> $item)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Str::limit($item->name, 30, '...') }}</td>
                                        <td>{{ Str::limit($item->position, 50, '...') }}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="" style="width:40px; height:40px;"></td>
                                        <td>{{ Str::limit($item->message, 50, '...') }}</td>
                                        <td>
                                            <a href="{{ route('edit.review', $item->id) }}" class="btn btn-primary rounded-pill">Edit</a>
                                            <a href="{{ route('delete.review', $item->id) }}" class="btn btn-danger rounded-pill">Delete</a>
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