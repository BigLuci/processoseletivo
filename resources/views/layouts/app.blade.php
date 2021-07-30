

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    @include('layouts.default.adicionacss')
    @include('layouts.default.adicionajs')]

    <style>
        .mui--text-title, h3 {
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            color: #FFF;
        }
        /* .drawertitle{
           color:#9F
           9FA7;
           font-size:20;
           margin-left: 20px;
           margin-top: 15px;
        }
         */
    </style>

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}


    @include('layouts.default.footer')



</body>
</html>
