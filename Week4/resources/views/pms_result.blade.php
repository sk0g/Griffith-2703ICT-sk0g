@extends('layouts/master')
@section('title')
    PM Search Result
@endsection

@section('content')
    <h2>Australian Prime Ministers</h2>
    <h3>Results</h3>

    Query: 
    @if (!empty($name))
        {{$name}}
    @endif

    @if (!empty($year))
        {{$year}}
    @endif

    @if (!empty($state))
        {{$state}}
    @endif
    <br><br>

    @if (!empty($pms))
        <table class="bordered">
            <thead>
            <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
            </thead>
        <tbody>

        @foreach ($pms as $pm)
            <tr><td>{{$pm['index']}}</td>
                <td>{{$pm['name']}}</td>
                <td>{{$pm['from']}}</td>
                <td>{{$pm['to']}}</td>
                <td>{{$pm['duration']}}</td>
                <td>{{$pm['party']}}</td>
                <td>{{$pm['state']}}</td></tr>
        @endforeach

    @endif

    @if (!empty($pms))
    </tbody>
    </table>
    @endif

@endsection