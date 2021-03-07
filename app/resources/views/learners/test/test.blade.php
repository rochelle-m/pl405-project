@extends('app')
@section('title')
 {{-- needs to be set dynamically when mock test is ready --}}
    Test
@endsection

@section('imports')
    <link
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
    rel="stylesheet"
    id="bootstrap-css"
    />
    <link rel="stylesheet" href="{{ asset('css/learners.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="body">
      <div class="col-lg-12 well form-container">
        <h1 class="title">Test</h1>
        @yield('question')
      </div>
    </div>
  </div>
@endsection