@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categories Adoption</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Short Desc</th>
                            <th>Image</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <img src="{!! url('images/categories/'.$category->image) !!}" alt="">
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
                    <h4 class="card-title">Add New Categories Adoption</h4>
                    <form action="{!!  url('admin/categories-adoption/add')  !!}" method="post" enctype="multipart/form-data">
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
                            <label for="">Description *</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                      required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Image *</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
