<!DOCTYPE html>
<html lang="en" dir="{{ (App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr' }}">



<head>
    @include('partials.head') 
</head>




<body class="hold-transition skin-blue sidebar-mini" ng-app="academia">

@yield('custom_div')
 <?php 
 $class = '';
 if(!isset($right_bar))
    $class = 'no-right-sidebar';

 ?>


<div id="wrapper">


@include('partials.topbar')
    
    

@include('partials.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @if(isset($siteTitle))
                <h3 class="page-title">
                    {{ $siteTitle }}
                </h3>
            @endif

            <div class="row">
                <div class="col-md-12">

                    
    @if(env('DEMO_MODE'))  
    <div class="alert alert-info demo-alert">
    &nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{getPhrase('info')}}!</strong> CRUD {{getPhrase('operations_are_disabled_in_demo_version')}}
    </div>
    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')

                </div>
            </div>
        </section>
    </div>
</div>

{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}

@include('partials.javascripts')
</body>
</html>