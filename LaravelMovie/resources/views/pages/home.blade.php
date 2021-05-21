@extends('layouts.main-layout')

@section('title')

    Movies

@endsection

@section('content')

    <div class="container">

        <h1>Movie:</h1>
        <ul>
            @foreach ($movie as $film)

                <li>

                   <a href="{{ route('movie',$film -> id)}}">

                        {{$film -> title}}

                    </a>

                </li>

            @endforeach
        </ul>


    </div>

@endsection
