@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->full_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4  ">
            <div class="card">
                <div class="form card-body">
                    <h4 class="card-title">Add New User</h4>
                    <form action="{!!  url('admin/user/add')  !!}" method="post">
                        {!! csrf_field() !!}

                        @if($message = Session::get('error'))
                            <div class="alert alert-warning">
                                {{$message}}
                            </div>
                        @endif

                        @if($message = Session::get('success'))
                            <div class="alert alert-info">
                                {{$message}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="">Full Name *</label>
                            <input type="text" class="form-control" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email *</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password *</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="client">Client</option>
                                <option value="admin">Admin</option>
                                <option value="orphanage">Orphanage</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
