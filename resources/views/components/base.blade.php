<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <meta>
</head>
<body>
    <x-navbar></x-navbar>
    <x-success></x-success>
    <x-errors></x-errors>
    <img src="#" alt="Text">
    {{ $slot }}

</body>
</html>
