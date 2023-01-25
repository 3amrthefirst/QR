<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

<div class="container mt-4">


    <div class="card col-md-4 d-flex m-auto" >
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
        <div class="card-body">
            {!!  QrCode::size(400)->generate($link) !!}
        </div>
        <form class="p-3"  action="{{route('pdf')}}" method="post" >
            @csrf
            <input type="hidden" name="link" value="{{$link}}" >
            <button type="submit" class="btn btn-dark" style="display: block !important;"> download pdf </button>
        </form>
    </div>

{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <h2>Color QR Code</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            {!! QrCode::size(300)->backgroundColor(255,90,0)->generate($link) !!}--}}
{{--        </div>--}}
{{--    </div>--}}

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
