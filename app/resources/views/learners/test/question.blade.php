@extends('learners.test.test')

@section('question')
    <div class="test">
        <form action="/api/next" method="POST">
            @csrf
            <h2 class="question-line">{{$questions[$index]->question}}</h2>
            <ul class="question">
                <input type="text" value={{$questions[$index]->id}} name="id" hidden>
                <input type="text" value={{$index + 1}}  name="index" hidden>
                <img src={{$questions[$index]->img ?? ''}}  alt="" hidden>
                <li><input type="radio" name="answer" value="1">{{$questions[$index]->option1}}</li>
                <li><input type="radio" name="answer" value="2">{{$questions[$index]->option2}}</li>
                <li><input type="radio" name="answer" value="3">{{$questions[$index]->option3}}</li>
                <li><input type="radio" name="answer" value="4">{{$questions[$index]->option4}}</li>
            </ul>
            
            <p class="error" style="float: left; display:block; visibility: hidden;"></p>
            <br>
    
            <div class="controls">
                <button class="skip" name="skip">Skip</button>
                <button class="next" name="next"">Next</button>
            </div>
        </form>
    </div>

@endsection