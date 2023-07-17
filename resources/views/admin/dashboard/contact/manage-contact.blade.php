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
                                <th>E-mail</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($contacts as $contact)
                                @if($contact->status == 0)
                                    <tr id="table_row" style="background-color: #0ea04e">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <a href="#" onclick="event.preventDefault();document.getElementById('delete_id').submit();return confirm('Are you sure delete this?')">
                                            <i class="fa-sharp fa-solid fa-trash" style="font-size: 20px;margin-right: 10px;color:firebrick"></i>
                                        </a>
                                        @if($contact->status == 0)
                                        <a href="{{ route('contact_seen_status',['id'=>$contact->id]) }}" class="btn btn-primary">UnSeen</a>
                                        @else
                                            <a href="{{ route('contact_seen_status',['id'=>$contact->id]) }}" class="btn btn-success">Seen</a>
                                        @endif
                                        <form action="{{ route('delete_contact') }}" id="delete_id" method="post">
                                            @csrf
                                            <input type="hidden" name='delete_id'  value="{{ $contact->id }}">
                                        </form>

                                    </td>
                                </tr>
                                @else
                                    <tr id="col_contact" >
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>e
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <a href="#" onclick="event.preventDefault();document.getElementById('delete_id').submit();return confirm('Are you sure delete this?')">
                                                <i class="fa-sharp fa-solid fa-trash" style="font-size: 20px;margin-right: 10px;color:firebrick"></i>
                                            </a>
                                            <form action="{{ route('delete_contact') }}" id="delete_id" method="post">
                                                @csrf
                                                <input type="hidden" name='delete_id'  value="{{ $contact->id }}">
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
