@extends('layouts.app')


@section('content')

<div class="jumbotron" style="#" background-size: cover; background-position: center; height: 87vh;">
    <div class="row" style="background: rgba(29, 95, 16, 0.96); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
            <div class="col-md-4" style="padding: 20px; ">
                <h1 class="text-white">Hello, {{ Auth::user()->name }}</h1>
                <h4 class="text-white">Email: {{ Auth::user()->email }}</h4>
            </div>
        

        
    </div>
</div>

@endsection


@section('footer')
    @include('layouts.footerShortPage')
@endsection