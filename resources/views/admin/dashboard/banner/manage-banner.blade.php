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
                                <th>Sub-title</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $key=>$banner)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $banner->sub_title }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        <img style="width:50px;height:50px;" src="{{ $banner->image }}" alt="">
                                    </td>
                                    <td>
                                        {{ $banner->status == 1? 'Active':'De_Active' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.banner',['id'=>$banner->id]) }}" class=""><i class="fa-sharp fa-solid fa-pen" style="font-size: 20px;margin-right: 10px;color:#f1c40f"></i></a>
                                        <form action="{{ route('delete.banner') }}" id="delete_id" method="post">
                                            @csrf
                                            <input type="hidden" name='delete_id'  value="{{ $banner->id }}">
                                            <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This!')">
                                        </form>



                                        @if($banner->status == 1)
                                            <a href="{{ route('status.banner',['id'=>$banner->id]) }}" class="btn btn-primary btn-sm">Active</a>
                                        @else
                                            <a href="{{ route('status.banner',['id'=>$banner->id]) }}" class="btn btn-warning btn-sm">De_Active</a>
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
