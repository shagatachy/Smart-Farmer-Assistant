@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', '#')
        @slot('title', 'Agroforestry Solutions ')
        @slot('leadText', '')
        @slot('description', '')
    
        @section('heroContent')
            @include('agroforestry.agroforestryForm')
        @endsection
    @endcomponent
@endsection



@section('content')
    

<table class="table mt-6" style="border: #4B6F44 solid">
    <thead class="thead" style="background:#4B6F44; color:white; font-weight:bolder">
        <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Planting Date</th>
            <th scope="col">Harvest Date</th>
            <th scope="col">Quantity</th>
            <th scope="col">Location</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($agroforestries as $agroforestry)
            <tr style="border: #4B6F44 solid">
                {{-- <th scope="row">{{ $agroforestry->id }}</th> --}}
                <td>{{ $agroforestry->name }}</td>
                <td>{{ $agroforestry->type }}</td>
                <td>{{ $agroforestry->planting_date}}</td>
                <td>{{ $agroforestry->harvest_date}}</td>
                <td>{{ $agroforestry->quantity }}</td>
                <td>{{ $agroforestry->location }}</td>
                <td>{{ $agroforestry->notes }}</td>
                <td>
                    <a href="{{ route('agroforestry.edit', $agroforestry->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('agroforestry.destroy', $agroforestry->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection