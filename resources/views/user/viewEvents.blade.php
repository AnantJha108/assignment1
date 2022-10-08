@extends('base')

@section('content')
    <div class="container mt-3">
        <div class="card shadow-xl">
            <div class="card-body px-20">
                <img src="https://picsum.photos/800/250" class="img-fluid w-100 mb-3 rounded" alt="">
                @foreach ($events as $item)
                    <h6 class="mb-2 h5">Title:{{$item->title}}</h6>
                    <p class="mb-2 h6">Venue:{{$item->venue}}</p>
                    <p class="mb-2">Date:{{$item->date}}</p>
                    <p class="mb-2">Time:{{$item->time}}</p>
                    <p class="mb-2">Description:{{$item->description}}</p>
                    <p class="mb-2">Event Created By :</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
