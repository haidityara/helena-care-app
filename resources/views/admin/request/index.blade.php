@extends('admin.layout')

@section('content')



    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Request Adoptions</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name Req</th>
                            <th>Phone</th>
                            <th>Reason</th>
                            <th>Name adoption</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requests as $request)
                            <tr>
                                <td>{{$request->name}}</td>
                                <td>{{$request->phone}}</td>
                                <td>{{$request->reason}}</td>
                                <td>{{$request->getAdoption->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

@endsection
