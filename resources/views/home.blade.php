@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                            <h1>guido 0/!!!</h1>
                            <h2>while</h2>
                            <h1>guido 0/</h1>
                            <h1>Fabrizio</h1>
                            <h1>Antonio</h1>
                            <h1>andrea2</h1>
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
