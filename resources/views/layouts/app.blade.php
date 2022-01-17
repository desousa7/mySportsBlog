

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Sports Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name','My Sports Blog') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="text-gray-100 no-underline hover:underline" href="/">Home</a>
                    <a class="text-gray-100 no-underline hover:underline" href="/blog">Blog</a>
                    @guest
                        <a class="text-gray-100 no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="text-gray-100 no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                        class="text-gray-100 no-underline hover:underline"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification>
                    <li class="dropdown" id="markasread" onclick="markNotificationAsRead('{{count(auth()->user()->unreadNotifications)}}')">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           <span class="text-gray-100 glyphicon glyphicon-globe">Notifications </span><span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>
                        </a>

                        <ul class="dropdown-content" role="menu">
                            <li>
                                @forelse(auth()->user()->unreadNotifications as $notifications)
                                    @include(Str::snake(class_basename($notifications->type))) 
                                    @empty
                                    <a href="#">No Notifications</a>                         
                                @endforelse
                            </li>
                        </ul>
                    </li>

                     
                    @endguest
                </nav>
            </div>
        </header>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
