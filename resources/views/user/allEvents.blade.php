@extends('base')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h4 mb-4">All Events List</h2>
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Venue</th>
                                <th>Event Created By</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Description</th>
                            </tr>
                            @foreach ($events as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->venue }}</td>
                                    <td></td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->description }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
