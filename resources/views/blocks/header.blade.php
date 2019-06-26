@section('css')
    @parent
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
@stop
    @include('elements.head')
{!! '</head><body>' !!}
    <header class="navbar-fixed-top wrap-header">
        <div class="header">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 cl">
                    <a href="{{ url('/') }}">
                    <div class="logo">
                        <img src="https://www.hotdeals.com/public/image/newest/hd-new-logo.svg" class="logo" />
                    </div>
                    </a>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 cl">
                    <form class="form-search">
                        <div class="input-group">
                            <input type="text" name="q"  class="form-control" />
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </span> Search</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 cl">
                <div class="link-menu">
                    <a class="link">Coupons</a>
                    <a class="link">Deals</a>
                    <a class="link">Travel</a>
                    <span class="dropdown">
                            <span class="link"{{-- data-toggle="dropdown"--}}>Dropdown <span class="caret"></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Laravel</a></li>
                                </ul>
                            </span>
                        </span>
                </div>
                </div>
            </div>
        </div>
    </header>