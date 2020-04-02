<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            padding: 20px;
        }

        .navbar {
            margin-bottom: 20px;
        }
    </style>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        @component('comp_navbar', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection ('body')
                @yield('body')
            @else
                
            @endif
        </main>
    </div>
<script src="{{ asset( 'js/app.js' ) }}" type="text/javascript"></script>
</body>
</html>