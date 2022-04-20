

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size:35px">Dodaj tabelę!</div>

                <div class="card-body" style="font-size:17px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                    @if (session()->has('failures'))

                        <table class="table table-danger">
                            <tr>
                                <th>Row</th>
                                <th>Attribute</th>
                                <th>Errors</th>
                                <th>Value</th>
                            </tr>

                            @foreach (session()->get('failures') as $validation)
                                <tr>
                                    <td>{{ $validation->row() }}</td>
                                    <td>{{ $validation->attribute() }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($validation->errors() as $e)
                                                <li>{{ $e }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        {{ $validation->values()[$validation->attribute()] }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    @endif




                   <form action="import_parse" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group" >
                            <input type="file" name="file" />
                            <br></br>
                            <br><button type="submit" class="btn btn-primary" style="font-size:35px">Importuj</button></br>
                        </div>
                   </form>
                   <p style="font-size:30px">Prawidłowy format pliku: .txt, .xcl</p>
                   <p style="font-size:35px">Prawidłowe formatowanie pliku, według podane wzoru:</p>
                  <b> <p style="font-size:35px">Zespół,Punkty,Ilość spotkań,Gole dla,Gole Przeciw,Zwycięstwa,Remisy,Porażki 
</p></b>

                   <img src="img/tabelaexamples.png">
                </button>
            </div>
        </div>
    </div>
</div>
@endsection