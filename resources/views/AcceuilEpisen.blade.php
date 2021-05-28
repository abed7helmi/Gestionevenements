@extends('layouts.app')

@section('content')


{{-- type="text/javascript" --}}
<!-- Include Google Maps JS API -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI "></script>

{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI&libraries=places" async defer></script> --}}

<!-- Custom JS code to bind to Autocomplete API -->
<script type="text/javascript" src="/js/autocomplete.js"></script>


@if (session()->has('messageeven'))
<div class="message alert alert-danger" role="alert">
    {{session()->get('messageenven')}}
</div>
    
@endif


<h1>Acceuil evenements EPISEN</h1>
<div class="container">




  @livewire('datatable')
   




 
</div>



  @endsection