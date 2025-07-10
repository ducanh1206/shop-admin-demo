@extends('admin.admin_master')
@section('admin')

<div class="content">

    <form action="{{ route('store.faq') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card-body">
            
                <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card border mb-0">

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title mb-0">Add FAQs</h4>                      
                                            </div><!--end col-->                                                       
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Question</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="question" value="">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Answer</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" name="answer" value="">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </form>

</div>
@endsection