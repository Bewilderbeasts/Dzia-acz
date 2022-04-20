

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:30px"><b>Stwórz raport dnia meczowego!</b></div>

               
  @forelse ($terminarz as $terminarze)
  @empty 


   <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __(' Nic tu nie ma!') }}</b></label>
    <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Dodaj zawodników oraz terminarz, aby móc stworzyć raport dnia meczowego!') }}</b></label>

   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('personelnew') }}'">
     Dodaj zawodnika</button> </br> </div>
     
     <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('import-t') }}'">
     Dodaj terminarz</button> </br> </div>
  
  @else


                    <div class="card-body">

              <form method="POST" action="{{ route('generate') }}">
                            @csrf
    

                           <div class="form-group row" style="font-size:38px">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz spotkanie') }}</label>
                                <div class="col-md-6">
                            <select name='match' id='match'>
                                @foreach ($terminarz as $terminarze)
                        <option value="{{$terminarze->team}} - {{$terminarze->team2}}" style="font-size:38px">{{$terminarze->team}} - {{$terminarze->team2}}</option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                             <div class="form-group row" style="font-size:38px">
                                <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Wybierz formację') }}</label>
                                 <div class="col-md-6">
                            <select name='formation' id='formation'>
                                <option value="5-3-2">5-3-2</option>
                          <option value="5-4-1">5-4-1</option>
                                
                        <option value="4-4-2">4-4-2</option>
                          <option value="4-4-1-1">4-4-1-1</option>
                          <option value="4-3-2-1">4-3-2-1</option>
                         <option value="4-2-2-2">4-2-2-2</option>
                         <option value="3-5-2">3-5-2</option>
                          <option value="3-4-3">3-4-3</option>
                            </select> </div>
                            </div>


                                           {{-- Form::text('///////////////////////////////PIERWSZY SKŁAD//////////////////') --}}




                          <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player1' id='player1'  style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px" >{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>


                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player2' id='player2' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player3' id='player3' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player4' id='player4' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player5' id='player5' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player6' id='player6' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player7' id='player7' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player8' id='player8' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player9' id='player9' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player10' id='player10' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                      <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz zawodników') }}</label>
                                <div class="col-md-6">
                            <select name='player11' id='player11' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                    <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>


                           {{-- Form::text('///////////////////////////////REZERWOWI//////////////////') --}}

                          <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve1' id='reserve1' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                       <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve2' id='reserve2' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve3' id='reserve4' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve4' id='reserve4' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve5' id='reserve5' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                      <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve6' id='reserve6' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>  @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:38px">{{ __('Wybierz ławkę rezerwowych') }}</label>
                                <div class="col-md-6">
                            <select name='reserve7' id='reserve7' style="font-size:38px">
                                    @foreach ($zawodnicy as $zawodnik)
                        <option value="{{$zawodnik->name}} {{$zawodnik->surname}} {{$zawodnik->number}} {{$zawodnik->age}}" style="font-size:38px">{{$zawodnik->name}} {{$zawodnik->surname}} - {{$zawodnik->position}} </option>
                         @endforeach
                            </select>
                            </div>
                        </div>

                       
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size:17px">
                                        {{ __('Generuj raport') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endforelse
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


