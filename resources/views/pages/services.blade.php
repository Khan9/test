@extends('layout.app')

@section('content')

    <h2>laravel appp</h2>
    <p>This is service page<p>

    @if(count($services) > 0)
        <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach


    @endif
@endsection
