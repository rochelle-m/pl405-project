@extends('learners.test.test')

@section('question')
    {{-- temp --}}
    {{$details['aadhar_no'] ?? 'mock'}}
    <h2>Question {}</h2>
    <h4>Question body {}</h4>

@endsection