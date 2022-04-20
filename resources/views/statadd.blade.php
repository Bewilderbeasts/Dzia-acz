@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj statystyki gracza</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('add.stats') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player' id='player'>
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}}">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>
                    
                                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Występy') }}</label>
                                <div class="col-md-6">
                                        <input type="number" name="apps"  maxlength="2" min="0" max="40">
                                        </div></div>

                                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Bramki') }}</label>
                                <div class="col-md-6">
                                        <input type="number" name="goals"  maxlength="2" min="0" max="40">
                                        </div></div>

                                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Asysty') }}</label>
                                <div class="col-md-6">
                                        <input type="number" name="asissts"  maxlength="2" min="0" max="40">
                                        </div></div>

                                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Żółte kartki') }}</label>
                                <div class="col-md-6">
                                        <input type="number" name="ycards"  maxlength="2" min="0" max="40">
                                        </div></div>

                                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Czerwone kartki') }}</label>
                                <div class="col-md-6">
                                        <input type="number" name="rcards"  maxlength="2" min="0" max="40">
                                        </div></div>

                                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" onclick="return confirm('Jesteś pewien?')" class="btn btn-primary">
                                        {{ __('Dodaj statystyki') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                       <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">  <button class="btn btn-success" onclick="location.href='{{  url('stats') }}'">
     Powrót</button> 
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

