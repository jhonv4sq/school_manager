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
                        </div>
                    @endif

                    @if (Auth::user()->rol[0]->id == 1)
                        <p>has entrado como estudiante</p>
                    @endif
                    @if (Auth::user()->rol[0]->id == 2)
                        <p>has entrado como maestro</p>
                    @endif
                    @if (Auth::user()->rol[0]->id == 3)
                        <p>has entrado como director</p>
                    @endif
                </div>
            </div>
            <nav-bar />
        </div>
    </div>
</div>
@endsection
