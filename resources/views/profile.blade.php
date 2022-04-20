@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:35px"><b>{{ __('Edytuj dane swojego konta') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @forelse ($data as $dat)
    @empty 


            <div class="card-body" style="font-size:50px">
                        <form method="POST" action="{{ route('prof.store') }}">
                            @csrf
    
                            <div class="form-group row"  style="font-size:50px; color: black">
                              <b>  <label for="name" class="col-md-4 col-form-label text-md-right"  >{{ __('Imię') }}</label>
    
                                <div class="col-md-6" style="font-size:50px; color: black">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="Brak informacji" ></input>
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nazwisko') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="Brak informacji" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Telefon') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="Brak informacji" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nr domu') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="housenr" value="Brak informacji" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Ulica') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="street" value="Brak informacji" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miejscowość') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="town" value="Brak informacji" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Kod pocztowy') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="postcode" value="Brak informacji" >
                                </div>
                            </div>
                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miasto') }}</b></label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="city" value="Brak informacji" >
                                </div>
                            </div>


    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('Zmień dane') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
    @else

                     @foreach ($data as $dat)
                     
                   

                    <div class="card-body">
                        <form method="POST" action="{{ route('prof.store') }}">
                            @csrf
    
                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Imię') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$dat->name}}" style="font-size:50px"></input>
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{$dat->surname}}" style="font-size:50px">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{$dat->phone }}" style="font-size:50px">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nr domu') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="housenr" value="{{  $dat->housenr }}"style="font-size:50px" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ulica') }}</label>
    
                                <div class="col-md-6" >
                                    <input id="name" type="text" class="form-control " name="street" value="{{  $dat->street}}" style="font-size:50px" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Miejscowość') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="town" value="{{$dat->town}}"style="font-size:50px" >
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kod pocztowy') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="postcode" value="{{$dat->postcode  }}" style="font-size:50px">
                                </div>
                            </div>
                            <div class="form-group row" style="font-size:50px; color: black">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Miasto') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="city" value="{{ $dat->city  }}" style="font-size:50px">
                                </div>
                            </div>

    
                      @endforeach
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4" >
                                    <button type="submit" class="btn btn-primary"style="font-size:35px" >
                                        {{ __('Zmień dane') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                   
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
