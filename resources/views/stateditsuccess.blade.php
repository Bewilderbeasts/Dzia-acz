@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sukces edycji') }}</div>

                <div class="card-body">
                   
                    {{ __('Statystyki zostały zaktualizowane!') }}



                  <br></br>  <button class="btn btn-success" onclick="location.href='{{  url('stats') }}'">
     Powrót</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


