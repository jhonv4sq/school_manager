@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Calificacion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('ratings.update', $rating->id)}}">
                        @method('patch')
                        @csrf

                        <div class="row mb-3">
                            <label for="number" class="col-md-4 col-form-label text-md-end">{{ __('number') }}</label>

                            <div class="col-md-6">
                                <input 
                                id="number" 
                                type="text" 
                                class="form-control @error('number') is-invalid @enderror" 
                                name="number" 
                                value="{{ $rating->number }}" 
                                required autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection