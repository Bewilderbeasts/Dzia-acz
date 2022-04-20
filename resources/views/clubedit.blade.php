@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:35px"><b>{{ __('Edytuj dane swojego klubu') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="img/{{$user->logo}}" style="width:200px; height:200px; float:right; margin-right">
                    <form enctype="multipart/form-data" action="{{route('user.logo')}}" method="POST">
                        @csrf
                        <label style="font-size:45px">Zmień zdjęcie klubowe</label><br>
                        <input type="file" name="logo"><br>
                        <input type="hidden" name="token" value="(( csrf_token() ))" ><br>
                        <input type="submit" class="pull-right btn btn-sm btn-primary" style="font-size:30px">
                    </form><br>
                    <br>
                    <br>
                    <br>

                    <div class="card-body">
                        <form method="POST" action="{{ route('club.update') }}">
                            @csrf
        @foreach ($data as $dat)
        
                            <div class="form-group row"  style="font-size:45px" >
                                <label for="clubname" class="col-md-4 col-form-label text-md-left" >{{ __('Nazwa klubu') }}</label>
    
                                <div class="col-md-6">
                                    <input id="clubname" type="text" class="form-control" name="clubname" value=" {{$dat->clubname}} " style="font-size:45px;color: black;">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:45px" >
                                <label for="localization" class="col-md-4 col-form-label text-md-left">{{ __('Lokalizacja') }}</label>
    
                                <div class="col-md-6" >
                                    <input id="localization" type="text" class="form-control @error('name') is-invalid @enderror" name="localization" value="{{$dat->localization}}" style="font-size:45px;color: black;" >
                                </div>
                            </div>

                            <div class="form-group row"  style="font-size:45px">
                                <label for="phone" class="col-md-4 col-form-label text-md-left">{{ __('Telefon') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{$dat->phone}}" style="font-size:45px;color: black;">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:45px">
                                <label for="lnumber" class="col-md-4 col-form-label text-md-left">{{ __('Nr lokalu') }}</label>
    
                                <div class="col-md-6">
                                    <input id="lnumber" type="text" class="form-control" name="lnumber" value="{{ $dat->lnumber }}" style="font-size:45px;color: black;">
                                </div>
                            </div>

                            <div class="form-group row pull-left" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Ulica') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="street" value="{{ $dat->street }}" style="font-size:45px;color: black;">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Miejscowość') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="town" value="{{ $dat->town }}" style="font-size:45px;color: black;">
                                </div>
                            </div>

                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Kod pocztowy') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="postcode" value="{{ $dat->postcode }}" style="font-size:45px;color: black;">
                                </div>
                            </div>
                            <div class="form-group row" style="font-size:45px"> 
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Miasto') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="city" value="{{ $dat->city }}" style="font-size:45px;color: black;">
                                </div>
                            </div>
@endforeach
    
                    
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size:45px">
                                        {{ __('Zmień dane klubu') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
