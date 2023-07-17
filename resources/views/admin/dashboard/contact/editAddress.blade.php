@extends('admin.dashboard.master')
@section('content')
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Edit Contact Address</h3></div>
                        @if(session('session'))
                            <p class="alert alert-success">{{ session('session') }}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_address') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="update_about" value="{{ $address->id }}">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input value="{{ $address->address }}" type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input value="{{ $address->phone }}" type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input value="{{ $address->email }}" type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Website</label>
                                <input value="{{ $address->website }}" type="text" name="website" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
