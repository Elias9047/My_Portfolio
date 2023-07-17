@extends('admin.dashboard.master')
@section('content')
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Add Banner</h3></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('create_banner') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Sub Title</label>
                                <input type="text" name="sub_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
