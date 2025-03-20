<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Limpa Nome SPC e SERASA')</title>
    
    @yield('meta')
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Custom Styles -->
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
        
        /* Pulse animation for CTA buttons */
        .cta-button-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(249, 115, 22, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(249, 115, 22, 0);
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <div id="app">
        @yield('content')
    </div>
    
    <!-- Scripts -->
    @vite('resources/js/app.js')
    @yield('scripts')
    @stack('scripts')
</body>
</html>