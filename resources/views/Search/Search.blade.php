@extends('Layouts/Layout')

@section('content')

    <div class="col-md-12">
        @foreach($response ?? '' as $item)
            <div class="results">
                <div class="results-head">
                    <h4 class="results-title">{{$item->title}}</h4>
                </div>
                <div class="results-body">
                    <strong><span>{{$item->description}}</span></strong>
                    <p class="results-content-text">{{$item->post}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection