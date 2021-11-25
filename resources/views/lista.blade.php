@extends('layouts.plantilla')
@section('content')
      <nav class="navbar ">
        <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/lista') }}">Lista de empresas</a></li>
            <li><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
            
          </ul>
        </div>
      </nav>
      @endsection
      @section('cuerpo')
    <section>
      
        <div class="container mt-5 mb-5 ">
        <div class=" row d-flex justify-content-between cards ">
         
          <table class="table tabla">
            <thead class="tablaL">
              
              <th class="text-center" border="1">Nombre corto</th>
              <th class="text-center" border="1">Nombre Largo</th>
            </thead>
            <tbody>
               @foreach($data as $key=>$item)
                        
              <tr>
              
          
                  <td align="center">
                      {{$item->nombreC}}
                      
                  </td>
                  <td align="center">
                      {{$item->nombreL}}                                
                  </td>
              </tr>
              
          @endforeach
            </tbody>
          </table>
         
         
         
          {{--  <div class="col-sm-6">
          <h2><label for="empresas" class="form-label">Grupo Empresas</label></h2>
                <style>
                    table, th, td {
                        border: 2px solid black;
                        padding: 10px;
                    }
                </style>
                <table name="empresas" border="1">
                    <tr>
                            <th class="text-center" border="1">Nombre corto</th>
                            <th class="text-center" border="1">Nombre Largo</th>
                    </tr>
                    
                    @foreach($data as $key=>$item)
                        
                        <tr>
                            <td align="center">
                                {{$item->nombreC}}
                                
                            </td>
                            <td>
                                {{$item->nombreL}}                                
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </table>
          </div> --}}
            
        </div>
        </div>
    </section>
    @endsection
    