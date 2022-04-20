@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sukces dodawania') }}</div>

                <div class="card-body">
                   
                    {{ __('Wyniki zostały dodane do bazy danych!') }}



                  <br></br>  <button class="btn btn-success" onclick="location.href='{{  url('results') }}'">
     Powrót</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


