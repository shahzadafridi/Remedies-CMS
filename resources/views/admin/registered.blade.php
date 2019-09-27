@extends('layouts.master')

@section('title')
Register | Admin
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Registered Role</h4>
                
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                 @endif

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Edit</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->user_type }}</td>
                                <td>
                                    <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="/role-delete/{{ $row->id }}" method="POST">
                                        {{ csrf_token() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">DELETE</button>
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

@section('scripts')

@endsection

{{-- Test commit --}}