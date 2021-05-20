@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Apply | Learner\'s License') }}
                </div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/learners/apply" method="post">
                        @csrf
                        
                        <div class="form-group"> {{ 'Vehicle Type' }}</div>

                        <div class="form-group">
                           <input type="checkbox" name="vehicle-type[]" value="lmv" id="lmv">
                           <label for="lmv">{{ Lang::get('license.lmv') }}</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="vehicle-type[]" value="mcwog" id="mcwog">
                            <label for="mcwog">{{ Lang::get('license.mcwog') }}</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="vehicle-type[]" value="mcwg" id="mcwg">
                            <label for="mcwg">{{ Lang::get('license.mcwg') }}</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="vehicle-type[]" value="hmv" id="hmv">
                            <label for="hmv">{{ Lang::get('license.hmv') }}</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="vehicle-type[]" value="hpv" id="hpv">
                            <label for="hpv">{{ Lang::get('license.hpv') }}</label>
                        </div>
                            <div class="form-group col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
