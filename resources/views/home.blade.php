<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1 class="m-4">
        Treni extra-galattici in partenza:
    </h1>
    
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-4">
                <span>
                    Partenza da:
                    <h3 class="d-inline">
                        {{ $train->stazione_di_partenza }}
                    </h3>
                </span>
                <p>
                    Azienda: {{ $train->azienda }}
                </p>
                <p>
                    Data di arrivo: @if($train->data_di_partenza>$train->data_di_arrivo) {{$train->data_di_arrivo}} @else {{$train->data_di_partenza}} @endif
                </p>
                <p>
                    Orario di partenza: {{ $train->orario_di_partenza }}
                </p>
                <p>
                    Data di arrivo: @if($train->data_di_partenza<$train->data_di_arrivo) {{$train->data_di_arrivo}} @else {{$train->data_di_partenza}} @endif
                </p>
                <p>
                    Orario di arrivo previsto: {{ $train->orario_di_arrivo }}
                </p>
                <p>
                    In orario: @if($train->in_orario) si @else no @endif
                </p>
            </div>
            @endforeach
        </div>
    </div>
    

</body>

</html>
