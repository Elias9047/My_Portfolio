@extends('admin.dashboard.master')
@section('content')
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Add Skill</h3></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('create_skill') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Skill Name</label>
                                <input type="text" name="skill_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last week</label>
                                <input type="text" name="last_week" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Month</label>
                                <input type="text" name="last_month" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Percent</label>
                                <input type="text" name="percent" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
