<html>
  <head>
    <link href="{{asset('css/failed.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
     
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <img src="/images/failure.png" alt="Failure" style="width:100%">
      </div>
        <h1>{{$msg1 ?? 'Failure'}}</h1> 
        <p>{{$msg2 ?? ''}}</p>
        <button> <a href="/">Back to home</a> </button>
      </div>
    </body>
</html>