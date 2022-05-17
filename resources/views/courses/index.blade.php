@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($courses as $course)
    <div class="row justify-content-center">
       <a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a> 
        <div class="d-flex justify-content-end">
            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary"> Edit</a>

            <div class="ml-2">
                <form method="POST" action="{{ route('courses.destroy', $course->id) }}">
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