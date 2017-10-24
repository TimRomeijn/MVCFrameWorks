@php
    use App\Style;

    $styles = Style::all();
@endphp

<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-4">
                <h4 class="text-white">TattooStyles</h4>
                <ul class="list-unstyled">
                    @foreach($styles as $style)
                        <li><a href="/styles/{{ $style->id }}" class="text-white">{{ $style->stylename }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        <a href="/" class="navbar-brand">TattooYou</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
    </ul>
</div>