@extends('layout')


@section('content') 
{{-- alles wat hier staat is dus 'content' en zal worden geplaatst binnen layout.blade.php op de plek waar 'content' wordt genoemd --}}
    <h1>About page</h1>
@stop

@section('footer')
    <script type="text/javascript"> console.log("hi")</script>
    {{-- dit script komt wel op de about pagina maar niet op de blade pagina. --}}
@stop