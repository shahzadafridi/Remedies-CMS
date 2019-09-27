@extends('layouts.master')

@section('title')
Registered Edit | Remedies
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit role for registered user.</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/role-register-update/{{ $user->id }}" method="POST">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Give role</label>
                                    <select name="userType" class="form-control">
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role-registered" class="btn btn-danger">Cancel </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection