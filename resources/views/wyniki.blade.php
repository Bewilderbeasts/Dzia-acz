@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>{{ __('Wyniki ostatnich spotkań') }}</b></div>



                

<table class="table"> 
	
		
@forelse ($terminarz as $terminarzs)
	@empty 


	 <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Nic tu nie ma!') }}</b></label>


	  @if (auth()->check())
   @if (auth()->user()->isAdmin())
	  <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Dodaj daty spotkań, aby móc dodać ich wyniki!') }}</b></label>

   <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('import-t') }}'">
     Importuj terminarz!</button> </br> </div>

      @else

   @endif
@endif
	
	@else

	
		@forelse ($results as $resultss)
		@empty 

		 <label for="name" class="col-md-12 col-form-label text-md-center"><b>{{ __('Nic tu nie ma! Dodaj wyniki do spotkan!') }}</b></label>


	  @if (auth()->check())
   @if (auth()->user()->isAdmin())
		 <div class="col text-center"><br> <button class="btn btn-success text-center" onclick="location.href='{{  url('resultsnew') }}'">
     Dodaj wyniki!</button> </br> </div>
      @else

   @endif
@endif

		 @else

		 @foreach ($results as $resultss)
		 <thead class="thead-light"><tr>

	<th scope="col">{{$resultss->date}}</th>
		</tr>
	</thead>

	<tbody>
		<tr>	
			<td style="text-align:center;"> <b>{{$resultss->match}} {{$resultss->score}}</b></td>
		
	</tbody>
 @endforeach


@endforelse


@endforelse

</table>
@if (auth()->check())
   @if (auth()->user()->isAdmin())
    <button class="btn btn-success" onclick="location.href='{{  url('resultsnew') }}'">
     Dodaj wyniki spotkań</button>
   @else

   @endif
@endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

