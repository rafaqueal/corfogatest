@extends('welcome')

@section('content')

  <div class="container">
    <p>
    Lista de inspecciones
    <br>
    <br>
    </p>
    <div class="row">
        <div class="col-md-8 col-md-offset-0">

            <div class="panel panel-default">
              
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Fecha</th>
                      <th>Id de Finca</th>
                      <th>Numero de visita</th>
                    </tr>
                    <br>
                  </thead>

                  <tbody>
                    @foreach ($inspecciones as $inspeccion)
                      <tr>
                        <th scope="row">{{ $inspeccion->id }}</th>
                        <td>{{ $inspeccion->fecha }}</td>
                        <td>{{ $inspeccion->finca_id }}</td>
                        <td>{{ $inspeccion->num_visita}}</td>
                        <td>
                        <a href="#" class="btn btn-success" role="button">+</a>
                        </td>
                      </tr>
                    @endforeach

                    
            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



   
   @endsection 