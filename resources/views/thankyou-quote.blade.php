@extends('layouts.app') {{-- Or your layout file --}}
@section('content')
<div class="hero-cont text-light">
    <div class="container">
        <div class="container text-center py-5">
            <h1>Thank You!</h1>
            <p>{{ session('message', "Your quote request has been received. We'll contact you soon.") }}</p>        </div>
    </div>
</div>
@endsection
