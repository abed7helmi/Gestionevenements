@extends('layouts.app')

@section('content')


{{-- type="text/javascript" --}}
<!-- Include Google Maps JS API -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI "></script>

{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI&libraries=places" async defer></script> --}}

<!-- Custom JS code to bind to Autocomplete API -->
<script type="text/javascript" src="/js/autocomplete.js"></script>





<h1>Mes evenement</h1>
<div class="container">
    <div class="row col-lg-12 col-md-12 padddinghelmi">
        <table class="table table-striped table-hover js-basic-example table-custom mb-0">
            <thead class="thead-white">
                <tr>
                    <th>Action</th>
                    <th>Nom Evenement</th>
                    <th>Type</th>
                    <th>Nb participants</th>
                    <th>Adresse</th>
                    <th>Date</th>
       
                </tr>
            </thead>
            <tbody>
                @foreach ($evens as $vlan)
                <tr>
                    {{-- <td>{{$vlan->t_port->t_vlan->t_ref_vlan->Nom_Vlan}}</td> --}}

                    <td>
                        {{-- <i class="bi bi-pencil"></i> --}}
                        {{-- {{route('clm.detailvlan',['id'=>$vlan->Id_CLM])}} --}}
                        <a class="btn btn-outline-success btn-sm details-demande" type="button" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg></a>
                        <a class="btn btn-outline-danger btn-sm" type="button" href="" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></a>
                    </td>
                    
                    <td>{{$vlan->Nom_evenement}}</td>
                    <td>{{$vlan->Type}}</td>
                    <td>{{$vlan->Nb_participants}}</td>
                    <td>{{$vlan->Adresse}}</td>
                    <td>{{$vlan->date_evenement}}</td>

               </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>



  @endsection