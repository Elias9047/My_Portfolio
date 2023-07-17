@extends('admin.dashboard.master')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Manage Address</h6>
                    @if(session('session'))
                        <p class="alert alert-success">{{ session('session') }}</p>
                    @endif
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>SI</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>E-mail</th>
                                <th>Website</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($addresses as $key=>$address)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>{{ $address->phone }}</td>
                                    <td>{{ $address->email }}</td>
                                    <td>{{ $address->website }}</td>
                                    <td >
                                        <a href="{{ route('edit_address',['id'=>$address->id]) }}" class=""><i class="fa-sharp fa-solid fa-pen" style="font-size: 20px;margin-right: 10px;color:#f1c40f"></i></a>
                                        <form action="{{ route('delete_address') }}" method="post" class="form-group">
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure delete this?')">
                                            <input type="hidden" name='delete_id'  value="{{ $address->id }}">
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

