@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:40px"><b>{{ __('Pracownicy') }}</b></div>

                <table class="table"> 

	@forelse ($stan as $stans)
	@empty 


	 <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Nic tu nie ma!') }}</b></label>
	  <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Dodaj pracowników, aby móc ich wyświetlić!') }}</b></label>

   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('workersnew') }}'">
     Dodaj pracownika</button> </br> </div>
	
	@else


	<thead class="thead-light">
		<tr>
			<th scope="col" style="font-size:35px">Imię</th>
			<th scope="col" style="font-size:35px">Email</th>
			<th scope="col" style="font-size:35px">Stanowisko</th>
			<th scope="col" style="font-size:35px">Działania</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($works as $worker)
		<tr>
			<td style="font-size:45px; color:black;">{{$worker->name}}</td>
			<td style="font-size:45px; color:black;">{{$worker->email}}</td>



			@foreach ($pracka as $praca)
			<td style="font-size:45px; color:black;">             
			{{$praca}}
		</td>
@endforeach

			      
         

	<form action="{{ route('delete.workers', $worker->id) }}" method="POST">
    @csrf
    @method('DELETE')
   <td> <button class="btn btn-danger btn-sm" onclick="return confirm('Jesteś pewien?')" title="Delete" style="font-size:40px">Usuń</button></td>
</form>

           @endforeach
		</tr>
	</tbody>
</table>
      


		<button class="btn btn-success" onclick="location.href='{{  url('workersnew') }}'" style="font-size:35px">
     Dodaj pracownika</button>

@endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
