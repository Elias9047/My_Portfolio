@extends('admin.dashboard.master')
@section('content')update_skill
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center"><h3>Edit Skill</h3></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_skill') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="update_skill" value="{{ $skill->id }}">
                            <div class="form-group">
                                <label for="">Skill Name</label>
                                <input value="{{ $skill->skill_name }}" type="text" name="skill_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Week</label>
                                <input value="{{ $skill->last_week }}" type="text" name="last_week" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Month</label>
                                <input value="{{ $skill->last_month }}" type="text" name="last_month" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Percent</label>
                                <input value="{{ $skill->percent }}" type="text" name="percent" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
