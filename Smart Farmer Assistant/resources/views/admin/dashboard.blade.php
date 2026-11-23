@extends('layouts.app')


@section('content')

<div class="jumbotron" style="background-image: url('#'); background-size: cover; background-position: center; height: 87vh;">
    <div class="row" style="background: rgba(106, 131, 212, 0.99); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
            <div class="col-md-4" style="padding: 20px; border-radius: 10px;">
                <h1 class="text-white">hello, {{ Auth::user()->name }}</h1>
                <h4 class="text-white">Email: {{ Auth::user()->email }}</h4>
            </div>
        <!-- Right Column -->
        <div class="col-md-8">
        </div>

        {{-- New row --}}
        
    </div>
</div>

@endsection


@section('footer')
    @include('layouts.footerShortPage')
@endsection