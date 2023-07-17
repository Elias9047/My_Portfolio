@extends('admin.dashboard.master')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Manage Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>SI</th>
                                <th>Skill Name</th>
                                <th>Last Week</th>
                                <th>Last Month</th>
                                <th>Percent</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $skill->skill_name }}</td>
                                    <td>{{ $skill->last_week }}</td>
                                    <td>{{ $skill->last_month }}</td>
                                    <td>{{ $skill->percent }}</td>
                                    <td>
                                        {{ $skill->status == 1? 'Active':'De_Active' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('edit_skill',['id'=>$skill->id]) }}" class=""><i class="fa-sharp fa-solid fa-pen" style="font-size: 20px;margin-right: 10px;color:#f1c40f"></i></a>
                                        <a href="#" onclick="event.preventDefault();document.getElementById('delete_id').submit();return confirm('Are you sure delete this?')">
                                            <i class="fa-sharp fa-solid fa-trash" style="font-size: 20px;margin-right: 10px;color:firebrick"></i>
                                        </a>
                                        <form action="{{ route('delete_skill') }}" id="delete_id" method="post">
                                            @csrf
                                            <input type="hidden" name='delete_id'  value="{{ $skill->id }}">

                                        </form>
                                        @if($skill->status == 1)
                                            <a href="{{ route('status_skill',['id'=>$skill->id]) }}" class="btn btn-primary btn-sm">Active</a>
                                        @else
                                            <a href="{{ route('status_skill',['id'=>$skill->id]) }}" class="btn btn-warning btn-sm">De_Active</a>
                                        @endif
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
@endsection
