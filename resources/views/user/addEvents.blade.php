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
                        <h2 class="h4 mb-4">Create Events</h2>
                        <form action="{{ route('events.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="">Event Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="">Venue</label>
                                        <input type="text" name="venue" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="">Event Time</label>
                                        <input type="time" name="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="">Event Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" rows="6" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" class="btn btn-success float-end"
                                    style="background-color: #198754">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
