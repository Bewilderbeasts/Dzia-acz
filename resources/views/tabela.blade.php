@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header" style="font-size:40px"><b>{{ __('Aktualna tabela ligowa') }}</b></div>



                

<table class="table"> 
	<thead class="thead-light">
	



@forelse ($tabela as $tabelas)
	@empty 


	 <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Nic tu nie ma!') }}</b></label>
	  

	  @if (auth()->check())
   @if (auth()->user()->isAdmin())
   <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Dodaj nową tabelę!') }}</b></label>

   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('import') }}'">
     Importuj tabelę!</button> </br> </div>

     @else

   @endif
@endif
	
	@else











		<tr>
			<th scope="col" style="font-size:40px">#</th>
			<th scope="col"style="font-size:40px">Drużyna</th>
			<th scope="col"style="font-size:40px">Spotkania rozegrane</th>
			<th scope="col"style="font-size:40px">Zwycięstwa</th>
			<th scope="col"style="font-size:40px">Remisy</th>
			<th scope="col"style="font-size:40px">Porażki</th>
			<th scope="col"style="font-size:40px">Gole dla</th>
			<th scope="col"style="font-size:40px">Gole przeciw</th>
			<th scope="col"style="font-size:40px">Bilans</th>
			<th scope="col"style="font-size:40px">Punkty</th>
		</tr>
	</thead>
	




@foreach ($tabela as $pos => $tabelas)
	
	<tbody>
		<tr>	
			<td style="background-color:#a2b59e;font-size:40px">{{$pos+1}}</td>
			<td style="font-size:40px"><b>{{$tabelas->team}}</b></td>
			<td style="font-size:40px">{{$tabelas->matches}}</td>
			<td style="background-color:#84f76a;font-size:40px">{{$tabelas->wins}} </td>
			<td style="background-color:#e4e670;font-size:40px">{{$tabelas->draws}}</td>
			<td style="background-color:#e85a5a;font-size:40px">{{$tabelas->losses}}</td>
			<td style="font-size:40px">{{$tabelas->goalsfor}}</td>
			<td style="font-size:40px">{{$tabelas->goalsagainst}}</td>
			<td style="font-size:40px"> {{ $tabelas->goalsfor - $tabelas->goalsagainst }} </td>
			<td style="background-color:#56d4d6;font-size:40px"><b>{{$tabelas->points}}</b></td>
	</tbody>


@endforeach


</table>
@if (auth()->check())
   @if (auth()->user()->isAdmin())

<form action="{{ route('delete.tabela') }}" method="POST">
    @csrf
    @method('DELETE')
   <td> <button class="btn btn-danger btn-sm" onclick="return confirm('Jesteś pewien?')" title="Delete" style="font-size:40px">Usuń</button></td>
</form>
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
