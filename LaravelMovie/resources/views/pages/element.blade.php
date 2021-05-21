@extends('layouts.main-layout')

@section('title')

    Film info

@endsection

@section('content')

    <div class="container">

        <h1>Film: {{$film -> title}}</h1>

        <h3>Original title: {{$film -> original_title}}</h3>

        <h3>Nationality:{{$film -> nationality}}</h3>

        <h3>Date:{{$film -> date}}</h3>

        <h3>Vote average:{{$film -> vote}}</h3>


    </div>

@endsection
