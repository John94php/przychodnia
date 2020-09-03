<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PRZYCHODNIA</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/5629bafd13.js" crossorigin="anonymous"></script>
</head>
<body class="container jumbotron">
<h2 class="text-center pt-5"> PRZYCHODNIA - Lista Pacjentów </h2>
<a href="/index" class="btn btn-outline-dark">Powrót</a>
<div id="patientlist"></div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>