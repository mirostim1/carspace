@extends('layouts.admin')

@section('content')
    <h1>Details for record #{{ $record->id }}</h1>
    <a href="{{ route('history') }}" class="btn btn-info pull-right">Back to History</a>
    <br>
    <h4>Date:  <strong>{{ $record->created_at->toDateString() }}</strong> ~ (before {{ $record->created_at->diffInDays() }} days)</h4>
    <h4>Time: <strong>{{ $record->created_at->toTimeString() }}</strong></h4>
    <h4>Free spaces: <strong>{{ $record->free }}</strong></h4>
    <h4>Taken spaces: <strong>{{ $record->taken }}</strong></h4>
    <hr>


    <div class="col-md-12">
        <div class="row1">
        @for($i = 0; $i < 48; $i++)
            @if($i == 24)
                <div class="row divider" style="margin: 40px 0 40px 0"></div>
            @endif

            @if($record->spaces[$i] == 0)
                <div class="col-md-1 space-free text-center">{{ $i+1 }}</div>
            @else
                <div class="col-md-1 space-taken text-center">{{ $i+1 }}</div>
            @endif
        @endfor
        </div>
    </div>

@stop
