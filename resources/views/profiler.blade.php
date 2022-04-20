@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:35px"><b>{{ __('Twoje konto') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                   


                    <div class="card-body">
                        <form action="{{ route('profile') }}">
                            @csrf
    
                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Imię') }}</b></label>
    
                                @foreach ($data as $dat)
                <div class="col-md-6 col-form-label text-md-middle">
            <td>{{ $dat->name }}</td>
@endforeach
</div>
                            </div>

                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nazwisko') }}</b></label>
                                <div class="col-md-6 col-form-label text-md-middle">
                                <td>{{ $dat->surname }}</td>
                            </div>
                        </div>
                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Telefon') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->phone }}</td>
                            </div></div>

                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nr domu') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->housenr }}</td>
                            </div></div>

                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Ulica') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->street }}</td>
                            </div>
                            </div>

                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miejscowość') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->town }}</td>
                            </div>
                            </div>

                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Kod pocztowy') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->postcode }}</td>
                            </div></div>
                            <div class="form-group row" style="font-size:50px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miasto') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $dat->city }}</td>
                            </div></div>

    
                    
    
                            <div class="form-group row mb-0" >
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size:35px">
                                        {{ __('Zmień dane') }}
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
