@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Road Transport Services') }}</div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex flex-wrap justify-content-around">

                        <a href="/learners/apply" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Learner's License / Permit</div>
                              <div class="card-body">
                                <h5 class="card-title">Apply (fresh application)</h5>
                                <p class="card-text">Applicable for only 18+</p>
                              </div>
                          </div>
                        </a>

                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Learner's License / Permit</div>
                              <div class="card-body">
                                <h5 class="card-title">Renew</h5>
                                <p class="card-text">Applicable for persons whose learner's license has expired</p>
                              </div>
                          </div>
                        </a>

                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Learner's License / Permit</div>
                              <div class="card-body">
                                <h5 class="card-title">Mock Test</h5>
                                <p class="card-text">Take a mock test for practice</p>
                              </div>
                          </div>
                        </a>
                        
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Permanent License</div>
                              <div class="card-body">
                                <h5 class="card-title">Apply (fresh application)</h5>
                                <p class="card-text">Applicable one month after obtaining the learner's license</p>
                              </div>
                          </div>
                        </a>
                        
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Permanent License</div>
                              <div class="card-body">
                                <h5 class="card-title">Renew</h5>
                                <p class="card-text">If permanent license has expired</p>
                              </div>
                          </div>
                        </a>
    
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Permanent License</div>
                              <div class="card-body">
                                <h5 class="card-title">Apply for duplicate license</h5>
                                <p class="card-text">If permanent license is lost, stolen or damaged</p>
                              </div>
                          </div>   
                        </a>

  
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Vehicle Registration</div>
                              <div class="card-body">
                                <h5 class="card-title">Apply for RC Book</h5>
                                <p class="card-text">Register a new vehicle</p>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Vehicle Registration</div>
                              <div class="card-body">
                                <h5 class="card-title">Renew</h5>
                                <p class="card-text">Renew vehicle registration</p>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Vehicle Insurance</div>
                              <div class="card-body">
                                <h5 class="card-title">Apply</h5>
                                <p class="card-text">Check for insurance plans</p>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Traffic Violation fine</div>
                              <div class="card-body">
                                <h5 class="card-title">Pay</h5>
                                <p class="card-text">Pay fine for traffic violations</p>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Help and Resources</div>
                              <div class="card-body">
                                <h5 class="card-title">Study material</h5>
                                <p class="card-text">Prepare for your learner's test</p>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="nav-link">
                          <div class="card border-light mb-3 bg-light text-dark pointer" style="max-width: 10rem;">
                              <div class="card-header">Help and Resources</div>
                              <div class="card-body">
                                <h5 class="card-title">Contact</h5>
                                <p class="card-text">Get in touch with us</p>
                              </div>
                          </div>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
