<!doctype html>
<html lang="es">
@include('layouts.head')
<body>
@include('inc.messages')
@include('layouts.app')
@section('main')
@show
@include('layouts.modalLogin')
@include('layouts.modalSignin')
</body>
</html>