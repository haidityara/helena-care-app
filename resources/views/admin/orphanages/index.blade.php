@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orphanage</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Owner Name</th>
                            <th>City</th>
                            <th>Province</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orphanages as $orphanage)
                            <tr>
                                <td>{{$orphanage->name}}</td>
                                <td>{{$orphanage->owner_name}}</td>
                                <td>{{$orphanage->city}} </td>
                                <td>{{$orphanage->province }}</td>
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
                    <h4 class="card-title">Add New Orphanage</h4>
                    <form action="{!!  url('admin/orphanage/add')  !!}" method="post" enctype="multipart/form-data">
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
                            <label for="">Name *</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>


                        <div class="form-group">
                            <label for="">Owner Name *</label>
                            <input type="text" class="form-control" name="owner_name" required>
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

                        <div class="form-group">
                            <label for="">User *</label>
                            <select name="orphanage" id="" class="form-control">
                                @foreach($user_orphanage as $value)
                                    <option value="{{$value->id}}">{{$value->full_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
