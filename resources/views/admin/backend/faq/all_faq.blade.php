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
                        <h5 class="card-title mb-0">All FAQs Datatable</h5>
                        <a href="{{ route('add.faq') }}" class="btn btn-primary rounded-pill me-4">+ Add FAQs</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($faq as $key=>$item)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Str::limit($item->question, 50, '...')}}</td>
                                        <td>{{ Str::limit($item->answer, 50, '...')}}</td>
                                        <td>
                                            <a href="{{ route('edit.faq', $item->id) }}" class="btn btn-primary rounded-pill">Edit</a>
                                            <a href="{{ route('delete.faq', $item->id) }}" class="btn btn-danger rounded-pill">Delete</a>
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