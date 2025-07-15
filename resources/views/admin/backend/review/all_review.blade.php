@extends('admin.admin_master')
@section('admin')


<div class="content">

    <div class="">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">All Review Datatable</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
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
                                        <td>{{ Str::limit($item->name, 50, '...') }}</td>
                                        <td>{{ Str::limit($item->position), 30, '...' }}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="" style="width:40px; height:40px;"></td>
                                        <td>{{ Str::limit($item->message, 50, '...') }}</td>
                                        <td>
                                            <a href="{{ route('edit.review', $item->id) }}" class="btn btn-success rounded-pill">Edit</a>
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