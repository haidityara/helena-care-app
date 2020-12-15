@extends('admin.layout')

@section('content')



    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Adoptions</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($adoptions as $adoption)
                            <tr>
                                <td>{{$adoption->name}}</td>
                                <td>{{$adoption->birthday}}</td>
                                <td>{{$adoption->sex}}</td>
                                <td>{{$adoption->city}}</td>
                                <td>{{$adoption->province}}</td>
                                <td>
                                    <a href="{!! url('admin/adoption/'.$adoption->id.'/delete') !!}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-4  ">
            <div class="card">
                <div class="form card-body">
                    <h4 class="card-title">Add New </h4>
                    <form action="{!!  url('admin/adoption/add')  !!}" method="post" enctype="multipart/form-data">
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
                            <label for="">Category Adoption *</label>
                            <select name="category" id="" class="form-control">
                                @foreach($categories as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Name *</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="">Gender *</label>
                            <select name="gender" id="" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Birth Day *</label>
                            <input type="text" class="form-control" name="birth_day" placeholder="YYYY/MM/DD">
                        </div>

                        <div class="form-group">
                            <label for="">Image *</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label for="">Description *</label>
                            <textarea name="description" id="" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Orphanage </label>
                            <select name="orphanage" id="" class="form-control">
                                <option value="0">None</option>
                                @foreach($orphanages as $orphanage)
                                    <option value="{{$orphanage->id}}">{{$orphanage->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Post by</label>
                            <select name="user" id="" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->full_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">City *</label>
                            <input type="text" class="form-control" name="city" required>
                        </div>

                        <div class="form-group">
                            <label for="">Province *</label>
                            <input type="text" class="form-control" name="province" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address *</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
