@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header" style="font-size:30px"><b>{{ __('Zawodnicy klubu') }}</b></div>


<table class="table"> 
	<thead class="thead-light">

@forelse ($kadraz as $kadra)
	@empty 


	 <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Nic tu nie ma!') }}</b></label>
	  
	  @if (auth()->check())
   @if (auth()->user()->isAdmin())

   <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Dodaj zawodników, aby móc ich wyświetlić!') }}</b></label>


   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('personelnew') }}'">
     Dodaj zawodnika</button> </br> </div>

     @else

   @endif
@endif
	
	@else



		<tr>
			<th scope="col" style="font-size:30px">Imię</th>
			<th scope="col" style="font-size:30px">Nazwisko</th>
			<th scope="col" style="font-size:30px">Pozycja</th>
			<th scope="col" style="font-size:30px">Numer</th>
			<th scope="col" style="font-size:30px">Wiek</th>
			<th scope="col" style="font-size:30px">Narodowość</th>
				@if (auth()->check())
   @if (auth()->user()->isAdmin())
			<th scope="col" style="font-size:30px">Kontrakt do</th>

		
			<th scope="col" style="font-size:30px">Działania</th>


			@else

   @endif
@endif
		</tr>
	</thead>
@foreach ($kadraz as $kadra)
	<tbody>
		<tr>
			<td style="font-size:40px"><b>{{$kadra->name}}</b></td>
			<td style="font-size:40px"><b>{{$kadra->surname}}</b></td>
			<td style="font-size:40px"><b>{{$kadra->position}}</b></td>
			<td style="font-size:40px"><b>{{$kadra->number}}</b></td>
			<td style="font-size:40px"><b>{{$kadra->age}}</b></td>
			<td style="font-size:40px"><b>{{$kadra->nationality}}</b></td>
			@if (auth()->check())
   @if (auth()->user()->isAdmin())

			<td style="font-size:40px"><b>{{$kadra->contract}}</b></td>

			
			<form action="{{ route('delete.kadra', $kadra->id) }}" method="POST">
    @csrf
    @method('DELETE')
   <td> <button class="btn btn-danger btn-sm" onclick="return confirm('Jesteś pewien?')" title="Delete" style="font-size:30px">Usuń</button></td>
</form>


			@else

   @endif
@endif

	</tbody>
@endforeach
</table>


			@if (auth()->check())
   @if (auth()->user()->isAdmin())

<button class="btn btn-success" onclick="location.href='{{  url('personelnew') }}'">
     Dodaj zawodnika</button>

     	@else

   @endif
@endif
      
@endforelse

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
