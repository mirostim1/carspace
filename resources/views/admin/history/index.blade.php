@extends('layouts.admin')

@section('content')
    <h1>History spaces</h1>
    <hr>
    <br>

    @include('includes.sessions')

    @if(count($history) > 0)
        <form action="/admin/deleteHistory" method="POST">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" class="btn btn-danger" name="multiple" value="Delete selected">
            <br>
            <br>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th><input type="checkbox" id="options" /></th>
                    <th>#</th>
                    <th>Free</th>
                    <th>Taken</th>
                    <th>Date/Time</th>
                    <th>Details</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($history as $record)
                    <tr>
                        <th><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="{{ $record->id }}"></th>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->free }}</td>
                        <td>{{ $record->taken }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td><button type="submit" id="details" class="btn btn-default" name="details" value="{{ $record->id }}">Details</button></td>
                        <td>
                            <button type="submit" class="btn btn-danger" name="historyId" value="{{ $record->id }}">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>

        <!-- Pagination -->
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{ $history->render() }}
            </div>
        </div><!-- .Pagination -->
    @else
        <p>No history records for display</p>
    @endif
@stop

@section('scripts')
    <script>
        $('document').ready(function() {

            $('#options').click(function() {
                if(this.checked) {
                    $('.checkBoxes').each(function(){
                        this.checked = true;
                    });
                } else {
                    $('.checkBoxes').each(function(){
                        this.checked = false;
                    });
                }
            });

        });
    </script>
@stop