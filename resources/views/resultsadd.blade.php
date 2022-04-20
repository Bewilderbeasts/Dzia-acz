@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj wyniki spotkań</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('add.results') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="match" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz spotkanie') }}</label>
                                <div class="col-md-6">
                            <select name='match' id='match'>
                                    @foreach ($matches as $match)
                        <option value="{{$match->team}} - {{$match->team2}} {{$match->date}}">{{$match->team}} - {{$match->team2}} ({{$match->date}}) </option>
                         @endforeach
                            </select>
                            </div>
                        </div>
                    
                                       
                           <div class="form-group row">
                                <label for="result" class="col-md-4 col-form-label text-md-right">{{ __('Wynik') }}</label>
                                <div class="col-md-6">
                            <select name='result' id='result'>
                                <option value="0:0">0:0</option>
                        <option value="1:0">1:0</option>
                        <option value="0:1">0:1</option>
                          <option value="1:1">1:1</option>
                          <option value="2:1">2:1</option>
                          <option value="1:2">1:2</option>
                          <option value="2:2">2:2</option>
                          <option value="3:2">3:2</option>
                         <option value="2:3">2:3</option>
                          <option value="3:3">3:3</option>
                        <option value="4:3">4:3</option>
                          <option value="3:4">3:4</option>
                          <option value="4:4">4:4</option>
                          <option value="5:4">5:4</option>
                          <option value="4:5">4:5</option>
                          <option value="5:5">5:5</option>
                            </select>
                            </div>
                        </div>

                                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" onclick="return confirm('Jesteś pewien?')" class="btn btn-primary">
                                        {{ __('Dodaj wynik') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                       <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">  <button class="btn btn-success" onclick="location.href='{{  url('results') }}'">
     Powrót</button> 
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

