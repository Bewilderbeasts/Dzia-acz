@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:35px"><b>{{ __('Twój klub') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @forelse ($club1 as $clubb)
    @empty 
   
    <label for="name" class="col-md-10 col-form-label text-md-right"><b>{{ __('Niestety nie mamy jeszcze danych na temat twojego klubu :(') }}</b></label>

   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('club') }}'">
     Dodaj dane klubu</button> </br> </div>
    
    @else
                    
                         <img src="img/{{$user->logo}}" style="width:200px; height:200px; float:right; margin-right">



                    <div class="card-body">
                        <form action="{{ route('club.edit') }}">
                            @csrf
                                                        
    
                            <div class="form-group row pull-left">

    
   
                <div class="col-md-12 col-form-label text-md-middle " style="font-size:80px">
            <td><b>{{ $clubb->clubname }}</b></td>
</div>
                            </div>


                            <p>  &nbsp;&nbsp; </p>
                             <p>  &nbsp;&nbsp; </p>
                            


                            <div class="form-group row"  style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Lokalizacja') }}</b></label>
                                <div class="col-md-6 col-form-label text-md-middle">
                                <td>{{ $clubb->localization }}</td>
                            </div>
                        </div>
                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Nr lokalu') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->lnumber }}</td>
                            </div></div>

                            <div class="form-group row"  style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Telefon') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->phone }}</td>
                            </div></div>

                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Ulica') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->street }}</td>
                            </div>
                            </div>

                            <div class="form-group row pull-left" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miejscowość') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->town }}</td>
                            </div>
                            </div>

                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Kod pocztowy') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->postcode }}</td>
                            </div></div>
                            <div class="form-group row" style="font-size:45px">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Miasto') }}</b></label>
    
                                <div class="col-md-6 col-form-label text-md-middle">
                                    <td>{{ $clubb->city }}</td>
                            </div></div>

    
                            @if (auth()->check())
   @if (auth()->user()->isAdmin())
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size:45px">
                                        {{ __('Zmień dane') }}
                                    </button>
                                </div>
                            </div>

                                @else

   @endif
@endif
                        </form>
                    </div>
@endforelse
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
