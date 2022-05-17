@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center">
        <h2>{{ $course->name }}</h2>
        <h2>{{ $course->master }}</h2>
    </div>
</div>
@endsection