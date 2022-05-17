@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($ratings as $rating)
    <div class="row justify-content-center">
       <a href="{{ route('ratings.show', $rating->id) }}">{{ $rating->number }}</a> 
        <div class="d-flex justify-content-end">
            <a href="{{ route('ratings.edit', $rating->id) }}" class="btn btn-primary"> Edit</a>

            <div class="ml-2">
                <form method="POST" action="{{ route('ratings.destroy', $rating->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>

    </div>
    @endforeach
</div>
@endsection