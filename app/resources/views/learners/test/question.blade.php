@extends('learners.test.test')
@section('refresh')
    {{-- <meta http-equiv="refresh" content="30;url=http://localhost:8000/learners/test"> --}}
@endsection

@section('question')
    <div class="test">

        <p hidden>
            {{ $index = Session::has('test') ? Session::get('test')->getIndex() : '' }} 
        </p>

        <div class="progress-bar1" >
            <div class="progress1" style="width:{{ ($index)/Session::get('test')->getCount()*100 }}%;">

            </div>
        </div>

        <p class="progress">{{ $index + 1 }} / {{ Session::get('test')->getCount() }}</p>
    
        <form action="" method="POST">           
            @csrf

            <button name="quit" class="quit">Quit</button>
            <h2 class="question-line">{{$questions[$index]->question}}</h2>
            <ul class="question">
                <input type="text" value={{$questions[$index]->id}} name="id" hidden>
                <input type="text" value={{$index + 1}}  name="index" hidden>
            
                @if (isset($questions[$index]->img))
                    <img src={{$questions[$index]->img ?? ''}}  alt="sign" style="width:16%;">
                @endif

                <li><input type="radio" name="answer" value="1">{{$questions[$index]->option1}}</li>
                <li><input type="radio" name="answer" value="2">{{$questions[$index]->option2}}</li>
                <li><input type="radio" name="answer" value="3">{{$questions[$index]->option3}}</li>
                <li><input type="radio" name="answer" value="4">{{$questions[$index]->option4}}</li>
            </ul>
            
            <p class="error" style="float: left; display:block; visibility: hidden;"></p>
            <br>
    
            <div class="controls">
                @if ($index < Session::get('test')->getCount() - 1){
                    <button class="skip" name="skip">Skip</button>
                    <button class="next" name="next" value="next" style="width: 30%;">Next</button>       
                }
                @else{
                    <button class="finish" name="finish" value="finish" style="width: 80%;">Finish</button>           
                }
                @endif
            </div>
        </form>
    </div>

@endsection
