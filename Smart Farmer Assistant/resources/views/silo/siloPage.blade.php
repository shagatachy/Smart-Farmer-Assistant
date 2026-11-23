@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', '#')
        @slot('title', 'Efficiently manage your crop storage')
        @slot('leadText', '')
        @slot('description', ' ')
    
        @section('heroContent')
            @include('silo.siloForm')
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
            <th scope="col">Capacity (tons)</th>
            <th scope="col">Location</th>
            <th scope="col">Stored Material</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($silos as $silo)
            <tr style="border: #4B6F44 solid">
                {{-- <th scope="row">{{ $silo->id }}</th> --}}
                <td>{{ $silo->name }}</td>
                <td>{{ $silo->type }}</td>
                <td>{{ $silo->capacity }}</td>
                <td>{{ $silo->location }}</td>
                <td>{{ $silo->material }}</td>
                <td>{{ $silo->notes }}</td>
                <td>
                    <a href="{{ route('silo.edit', $silo->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('silo.destroy', $silo->id) }}" method="POST" style="display:inline;">
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