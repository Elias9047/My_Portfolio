@extends('admin.dashboard.master')
@section('content')
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Add Contact Address</h3></div>
                        @if(session('session'))
                            <p class="alert alert-success">{{ session('session') }}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('createContactDetails') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="">Address</label>
                                <input class="form-control" type="text" name="address">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input  type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Website</label>
                                <input  type="text" name="website" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
