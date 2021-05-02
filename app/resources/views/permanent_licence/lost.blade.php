@extends('app')

@section('title')
    Lost License
@endsection

@section('imports')
    <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/lost.css') }}">
    <link rel="stylesheet" href="{{ asset('css/learners.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="body">
            <div class="well form-container d-flex" >
                <aside>
                    <section>
                        If you have lost your license or it has been stolen or mutilated.
                        You are required to file
                        an FIR at your local police station. 

                        You will be granted a duplicate learner's license by the same district RTO that
                        issued your license.
                        <br><br>
                        You should carry the FIR copy with you till the time you are issued a duplicate
                        license.
                    </section>
                </aside>
                <form action="/license/lost/save" method="POST">
                    <h1 class="title">Application For Duplicate License</h1>

                    @csrf
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="form-group">
                          <label>Aadhar Number <span class="required">* </span></label>
                          <input
                            type="text"
                            name="aadhar_no"
                            placeholder="Enter your 12 digit Aadhar Card number"
                            class="form-control"
                            required
                            pattern="{12}"
                          />
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="form-group">
                            <label>License Number</label>
                            <input
                            type="text"
                            name="license_no"
                            class="form-control"
                            pattern="{12}"
                            />
                            <div class="info">ⓘ Fill as you recall</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label>What happended to your license? (Tick one that applies)<span class="required">* </span></label>
                            
                            <div>
                                <input
                                    type="radio"
                                    name="reason"
                                    value="lost"
                                    id="lost"
                                    required
                                />
                                <label for="lost">Lost</label>
                            </div>

                            <div>
                                <input
                                    type="radio"
                                    name="reason"
                                    value="stolen"
                                    id="stolen"
                                />
                                <label for="stolen">Stolen</label>
                            </div>

                            <div>
                                <input
                                    type="radio"
                                    name="reason"
                                    value="damaged"
                                    id="damaged"
                                />
                                <label for="damaged">Damaged</label>
                            </div>
                           

                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>FIR Number</label>
                                <p class="error" id="aadhar_error"></p>
                                <input
                                type="text"
                                name="fir"
                                class="form-control"
                                />
                            </div>
                        </div>

                        <div class="text-center">
                            <input
                                type="submit"
                                name="submit"
                                value="Next"
                                id="submitbtn"
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection