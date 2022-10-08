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
                        <h2 class="h4 mb-4">Recent Events List</h2>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Venue</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                            </tr>
                            @foreach ($events as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{route('viewEvents',$item->id)}}}" class="text-primary">{{ $item->title }}</a></td>
                                    <td>{{ $item->venue }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{ route('allEvents') }}" class="btn btn-warning btn-sm float-end">View All Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
