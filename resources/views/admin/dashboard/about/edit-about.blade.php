@extends('admin.dashboard.master')
@section('content')
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Edit Banner</h3></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_about') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="update_about" value="{{ $about->id }}">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{ $about->name }}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input value="{{ $about->date_of_birth }}" type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="10" rows="5" class="form-control">{{ $about->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input value="{{ $about->email }}" type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input value="{{ $about->phone }}" type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input value="{{ $about->address }}" type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($about->image)  }}" style="width:80px;height:auto;" alt="">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
