<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .hide{
            display: none;
        }
    </style>
</head>

<body>

<div class="container mt-4">

    <h2 class="mb-5"> make your own QR </h2>
    <form class="border p-5 " method="post" action="{{route('qrcode.generator')}}">
    @csrf
        <div class="mb-3 " >
            <label for="exampleFormControlInput1" class="form-label">your Link</label>
            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="https/example.com">
        </div>
        <button class="btn btn-dark"  type="submit"> make... ! </button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>



