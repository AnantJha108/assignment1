@extends('base')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2">
                @include('user.side')
            </div>
            <div class="col-9 offset-1 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h4 mb-4">Invites Users</h2>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($invites as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
