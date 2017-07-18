@extends('layouts.admin')

@section('content')
    <h1>Dashboard</h1>
    <hr>
    <div class="col-md-12">
        <div class="col-md-4 numb text-center">
            <p class="number">12</p>
            <p>free spaces out of 48 overall</p>
        </div>
        <div class="col-md-8 spaces-admin text-left">
            <div id="firstrow"></div>
            <div id="secondrow"></div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $('document').ready(function() {

            freeSpaces();

            setInterval(freeSpaces, 30000);

            function freeSpaces() {
                $.get('/freespaces', function (msg) {

                    $('.number').text(msg[1]);

                    $('#firstrow').empty();
                    $('#secondrow').empty();

                    for (i = 0; i < msg[0].length; i++) {
                        if (i < 24) {
                            if (msg[0][i] == 0) {
                                $('#firstrow').append("<div class='col-md-1 space-free text-center'>" + (i + 1) + "</div>");
                            } else {
                                $('#firstrow').append('<div class="col-md-1 space-taken text-center">' + (i + 1) + '</div>');
                            }
                        } else {
                            if (msg[0][i] == 0) {
                                $('#secondrow').append("<div class='col-md-1 space-free text-center'>" + (i + 1) + "</div>");
                            } else {
                                $('#secondrow').append('<div class="col-md-1 space-taken text-center">' + (i + 1) + '</div>');
                            }
                        }

                    }
                });
            }

        });
    </script>
@endsection
