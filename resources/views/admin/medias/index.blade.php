@extends('layouts.admin')

@section('content')
    <h1>Media Files</h1>
    <hr>
    <br>

    @include('includes.sessions')

    @if(count($photos) > 0)
        <form action="/admin/deleteMedia" method="POST">
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
                <th>Photo</th>
                <th>Path/Name</th>
                <th>Created</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>
                    <th><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="{{ $photo->id }}"></th>
                    <td>{{ $photo->id }}</td>
                    <td><img src="{{ $photo->path ? $photo->path : '/images/nophoto.gif' }}" width="40px" height="40px" /></td>
                    <td>{{ $photo->path }}</td>
                    <td>{{ $photo->created_at->diffForHumans() }}</td>
                    <td>
                        <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                        <input type="submit" class="btn btn-danger" name="single" value="Delete">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </form>

        <!-- Pagination -->
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{ $photos->render() }}
            </div>
        </div><!-- .Pagination -->
    @else
        <p>No media files for display</p>
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