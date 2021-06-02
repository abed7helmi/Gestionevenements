@extends('layouts.app')

@section('content')

<h1>Mes Participations</h1>
<div class="container">
  
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Evenement</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allpart as $x)
          <tr>
            <td><a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('clm.detaileven',['id'=>$x->id])}}">Detail</a></td>
            <td><a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('annulerpart',['id'=>$x->id])}}">Annuler</a></td>
            <td>{{$x->Nom_evenement}}</td>
            <td>{{$x->Adresse}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

</div>



@endsection