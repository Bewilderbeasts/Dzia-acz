@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size:17px"><b>{{ __('Brak uprawnień!') }}</b></div>

                <div class="card-body" style="font-size:32px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <b> {{ __('Nie masz uprawnień, aby wejść na tą stronę!') }} </b>
                    
                     <p>&nbsp;</p> 

                     <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggZD0iTTM5Mi4yMzQsMjYxLjk4OGMtNjYuMDM5LDAtMTE5Ljc2Niw1My43MjctMTE5Ljc2NiwxMTkuNzY2UzMyNi4xOTUsNTAxLjUyLDM5Mi4yMzQsNTAxLjUyUzUxMiw0NDcuNzkzLDUxMiwzODEuNzU0DQoJCQkJUzQ1OC4yNzMsMjYxLjk4OCwzOTIuMjM0LDI2MS45ODh6IE0zMTIuMzksMzgxLjc1NGMwLTQ0LjAyNiwzNS44MTgtNzkuODQ0LDc5Ljg0NC03OS44NDRjMTQuMDU2LDAsMjcuMjY2LDMuNjY0LDM4Ljc0OSwxMC4wNjYNCgkJCQlMMzIyLjQ1Niw0MjAuNTA0QzMxNi4wNTQsNDA5LjAyLDMxMi4zOSwzOTUuODEsMzEyLjM5LDM4MS43NTR6IE0zOTIuMjM0LDQ2MS41OThjLTE1LjUxMywwLTI5Ljk5Ni00LjQ2Mi00Mi4yNjMtMTIuMTQ4DQoJCQkJTDQ1OS45MywzMzkuNDkxYzcuNjg2LDEyLjI2NiwxMi4xNDgsMjYuNzUsMTIuMTQ4LDQyLjI2M0M0NzIuMDc4LDQyNS43OCw0MzYuMjYsNDYxLjU5OCwzOTIuMjM0LDQ2MS41OTh6Ii8+DQoJCQk8cGF0aCBkPSJNMjI4LjU1NCw0NDEuNjM3SDc5Ljg0NGMtMjIuMDEzLDAtMzkuOTIyLTE3LjkwOS0zOS45MjItMzkuOTIyVjEzMS4yNDRINDcxLjA4djEwMS44MDENCgkJCQljMCwxMS4wMjQsOC45MzcsMTkuOTYxLDE5Ljk2MSwxOS45NjFjMTEuMDI0LDAsMTkuOTYxLTguOTM3LDE5Ljk2MS0xOS45NjFWNzAuMzYzYzAtMzMuMDE5LTI2Ljg2NC01OS44ODMtNTkuODgzLTU5Ljg4M0g1OS44ODMNCgkJCQlDMjYuODY0LDEwLjQ4LDAsMzcuMzQzLDAsNzAuMzYzdjMzMS4zNTNjMCw0NC4wMjYsMzUuODE4LDc5Ljg0NCw3OS44NDQsNzkuODQ0aDE0OC43MWMxMS4wMjQsMCwxOS45NjEtOC45MzcsMTkuOTYxLTE5Ljk2MQ0KCQkJCVMyMzkuNTc4LDQ0MS42MzcsMjI4LjU1NCw0NDEuNjM3eiBNNDUwLjEyMSw1MC40MDJjMTEuMDA3LDAsMTkuOTYxLDguOTU1LDE5Ljk2MSwxOS45NjFjMCwxMS4wMDctOC45NTQsMTkuOTYxLTE5Ljk2MSwxOS45NjENCgkJCQlzLTE5Ljk2MS04Ljk1NS0xOS45NjEtMTkuOTYxQzQzMC4xNiw1OS4zNTYsNDM5LjExNCw1MC40MDIsNDUwLjEyMSw1MC40MDJ6IE0zNzAuMjc3LDUwLjQwMg0KCQkJCWMxMS4wMDcsMCwxOS45NjEsOC45NTUsMTkuOTYxLDE5Ljk2MWMwLDExLjAwNy04Ljk1NCwxOS45NjEtMTkuOTYxLDE5Ljk2MXMtMTkuOTYxLTguOTU1LTE5Ljk2MS0xOS45NjENCgkJCQlDMzUwLjMxNiw1OS4zNTYsMzU5LjI3LDUwLjQwMiwzNzAuMjc3LDUwLjQwMnogTTM5LjkyMiw3MC4zNjNjMC0xMS4wMDYsOC45NTQtMTkuOTYxLDE5Ljk2MS0xOS45NjFoMjUzLjk0NA0KCQkJCWMtMi4yMTYsNi4yNDgtMy40MzMsMTIuOTY0LTMuNDMzLDE5Ljk2MWMwLDcuMzcyLDEuMzQ2LDE0LjQzMiwzLjc5NCwyMC45NTlIMzkuOTIyVjcwLjM2M3oiLz4NCgkJPC9nPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" width="650" height="300" left/>
            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


