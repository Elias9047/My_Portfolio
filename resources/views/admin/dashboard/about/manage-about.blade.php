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
                                <th>Name</th>
                                <th>Birth_date</th>
                                <th>Description</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $key=>$about)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $about->name }}</td>
                                    <td>{{ $about->date_of_birth }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>{{ $about->email }}</td>
                                    <td>{{ $about->phone }}</td>
                                    <td>{{ $about->address }}</td>
                                    <td>
                                        <img style="width:50px;height:50px;" src="{{ $about->image }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit_about',['id'=>$about->id]) }}" class=""><i class="fa-sharp fa-solid fa-pen" style="font-size: 20px;margin-right: 10px;color:#f1c40f"></i></a>
                                        <a href="#" onclick="event.preventDefault();document.getElementById('delete_id').submit();return confirm('Are you sure delete this?')">
                                            <i class="fa-sharp fa-solid fa-trash" style="font-size: 20px;margin-right: 10px;color:firebrick"></i>
                                        </a>
                                        <form action="{{ route('delete_about') }}" id="delete_id" method="post">
                                            @csrf
                                            <input type="hidden" name='delete_id'  value="{{ $about->id }}">
                                        </form>
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

