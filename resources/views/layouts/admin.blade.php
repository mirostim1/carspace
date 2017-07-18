<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Bootstrap Admin Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="{{ asset('css/plugins/morris.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-fw fa-shield"></i> CarSpace</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <li class="dropdown">
        <a href="{{ url('/') }}"><i class="fa fa-desktop"></i> View site</a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
          <a href="{{ route('admin') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="users" class="collapse">
            <li>
              <a href="{{ route('admin.users.index') }}">View users</a>
            </li>
            <li>
              <a href="{{ route('admin.users.create') }}">Create user</a>
            </li>
          </ul>
        </li>
        <li class="{{ Request::is('admin/history') ? 'active' : '' }}">
          <a href="{{ route('history') }}"><i class="fa fa-fw fa-history"></i> History</a>
        </li>
        <li class="{{ Request::is('admin/medias') ? 'active' : '' }}">
          <a href="{{ route('admin.medias.index') }}"><i class="fa fa-fw fa-image"></i> Media files</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">

          @yield('content')

        </div>
      </div>
      <!-- /.row -->
     </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('js/plugins/morris/raphael.min.js') }}"></script>
<script src="{{ asset('js/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('js/plugins/morris/morris-data.js') }}"></script>

@yield('scripts')

</body>
</html>

