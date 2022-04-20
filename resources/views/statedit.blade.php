@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size:25px"><b>Edtyuj statystyki gracza</b></div>

                <div class="card-body">

                    <form method="POST"  action="{{ url ('/statedit/'.$stats->id)}}">
                           {{ method_field('PUT') }}
    {{ csrf_field() }}

                            <div class="form-group row" style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Wybierz zawodników') }}</b></label>
                                <div class="col-md-6">
                            <select name='player' id='player'>
                                    
                        <option value="{{$stats->player}}" >{{$stats->player}}</option>
                         
                            </select>
                            </div>
                        </div>


                    
                                        <div class="form-group row" style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Występy') }}</b></label>
                                <div class="col-md-6" style="font-size:35px">
                                        <input type="number" name="apps" value="{{old('apps') ?? $stats->apps}}" maxlength="2" min="{{$stats->apps}}" max="40" >
                                        </div></div>

                                        <div class="form-group row"style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Bramki') }}</b></label>
                                <div class="col-md-6">
                                        <input type="number" name="goals" value="{{old('goals') ?? $stats->goals}}" maxlength="2" min="{{$stats->goals-1}}" max="60">
                                        </div></div>

                                        <div class="form-group row"style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Asysty') }}</b></label>
                                <div class="col-md-6">
                                        <input type="number" name="asissts" value="{{old('asissts') ?? $stats->asissts}}" maxlength="2" min="{{$stats->asissts-1}}" max="40">
                                        </div></div>

                                        <div class="form-group row"style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Żółte kartki') }}</b></label>
                                <div class="col-md-6">
                                        <input type="number" name="ycards" value="{{old('ycards') ?? $stats->ycards}}" maxlength="2" min="{{$stats->ycards-2}}" max="40">
                                        </div></div>

                                        <div class="form-group row"style="font-size:35px">
                                <label for="position" class="col-md-4 col-form-label text-md-right"><b>{{ __('Czerwone kartki') }}</b></label>
                                <div class="col-md-6">
                                        <input type="number" name="rcards" value="{{old('rcards') ?? $stats->rcards}}" maxlength="2" min="{{$stats->rcards-1}}" max="40">
                                        </div></div>

                                        <div class="form-group row mb-0"style="font-size:35px">
                                <div class="col-md-6 offset-md-4">
                                    <button onclick="return confirm('Jesteś pewien?')" type="submit" class="btn btn-primary" style="font-size:25px">
                                        {{ __('Potwierdź edycję') }}
                                    </button> 

                                </div>
                            </div>
                        </form>

                                        <div class="form-group row mb-0" >
                                <div class="col-md-6 offset-md-4">  <button class="btn btn-success"  onclick="location.href='{{  url('stats') }}'" style="font-size:25px">
     Powrót</button> 
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

