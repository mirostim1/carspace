@if(Session::has('user_created'))
    <div class="alert alert-success">
        {{ session()->pull('user_created') }}
    </div>
@endif

@if(Session::has('user_updated'))
    <div class="alert alert-success">
        {{ session()->pull('user_updated') }}
    </div>
@endif

@if(Session::has('user_deleted'))
    <div class="alert alert-success">
        {{ session()->pull('user_deleted') }}
    </div>
@endif

@if(Session::has('photo_deleted'))
    <div class="alert alert-success">
        {{ session()->pull('photo_deleted') }}
    </div>
@endif

@if(Session::has('selected_deleted'))
    <div class="alert alert-success">
        {{ session()->pull('selected_deleted') }}
    </div>
@endif

@if(Session::has('history_selected'))
    <div class="alert alert-success">
        {{ session()->pull('history_selected') }}
    </div>
@endif

@if(Session::has('history_deleted'))
    <div class="alert alert-success">
        {{ session()->pull('history_deleted') }}
    </div>
@endif
