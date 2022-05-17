@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center">
        <h2>{{ $rating->number }}</h2>
    </div>
</div>
@endsection