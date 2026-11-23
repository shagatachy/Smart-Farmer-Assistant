@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', '#')
        @slot('title', 'Stay Informed with Latest Notices')
        @slot('leadText', '')
        @slot('description', '')
    
        @section('heroContent')
            @include('notice.noticeForm')
        @endsection
    @endcomponent
@endsection

@section('content')
<table class="table mt-6" style="border: #4B6F44 solid">
    <thead class="thead" style="background:#4B6F44; color:white; font-weight:bolder">
        <tr>
            <th style="border: #4B6F44 solid" scope="col">Notice Title</th>
            <th style="border: #4B6F44 solid" scope="col">PDF File</th>
            <th style="border: #4B6F44 solid" scope="col">Publish Date</th>
            <th style="border: #4B6F44 solid" scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notices as $notice)
            <tr style="border: #4B6F44 solid">
                <td style="border: #4B6F44 solid" >{{ $notice->title }}</td>
                <td><a href="{{ asset('storage/notices/' . $notice->file) }}" target="_blank"  style="border: #4B6F44 solid" >View PDF</a></td>
                <td  style="border: #4B6F44 solid" >{{ $notice->publish_date }}</td>
                <td>
                    <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('notice.destroy', $notice->id) }}" method="POST" style="display:inline;">
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
