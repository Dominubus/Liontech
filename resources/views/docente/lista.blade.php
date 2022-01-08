@extends('layouts.plantillaDocente')

@section('cuerpo')
{{ Breadcrumbs::render('docente.lista') }}
<title>Lista Empresas</title>
    <section>
        <div class=" mt-5 mb-5 ">
       
            <div class=" row  d-flex justify-content-between" style="background-color: #DDDDDD">
                <h1 class="text-center">Seleccione su empresa</h1>
                <div class="col-md-1">Año:
                    <select name="gestion" class="form-control" required>
                      <option value="2021">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                    </select>
                    
                </div>
            
            <div class="col-md-2"> Elegir semestre :


              <select name="semestre" class="form-control " required>
                  <option value="1">1</option>
                  <option value="2">2</option>
              </select>

          </div>
            <h2 class="textL"  for="empresas" class="form-label">Grupo Empresas</h2>
                <style>
                    table, th, td {
                        border: 2px solid black;
                        padding: 10px;
                       
                    }
                </style>
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
                @if(Session::get('fail2'))
                <div class="alert alert-danger">
                    {{ Session::get('fail2') }}
                </div>
                @endif
                @if(Session::get('fail3'))
                <div class="alert alert-danger">
                    {{ Session::get('fail3') }}
                </div>
                @endif
                @if(Session::get('fail4'))
                <div class="alert alert-danger">
                    {{ Session::get('fail4') }}
                </div>
                @endif
                @if(Session::get('fail5'))
                <div class="alert alert-danger">
                    {{ Session::get('fail5') }}
                </div>
                @endif
                
                <table name="empresas"  class="table tabla">
                    
                    <thead class="tablaL">
                        
                            <th class="text-center"><h4>Nombre corto</h4></th>  
                            <th class="text-center"><h4>Nombre Largo</h4></th>
                            <th class="text-center" colspan="9"><h4>Documentos</h4></th>
                    </thead>
                    
                    @foreach($data as $key=>$item)
                    @if($item->id_docente==session('LoggedUser'))
                        <tr>
                           
                            <td  align="center">
                                <h5> {{$item->nombreC}}</h5>
                                
                            </td>
                        
                            <td align="center">
                                <h5>{{$item->nombreL}}</h5>
                                                              
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.parteA') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="parteA" value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ParteA</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.parteB') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="parteB" value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ParteB</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.trabajo') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="trabajo" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Plan de trabajo</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.pagos') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="pagos" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Plan de pagos</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('docente.orden') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="orden" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Crear orden de cambio</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.cambios') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="cambios" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Ver orden de cambio</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('docente.contrato') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="id" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Generar/Ver contrato</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                  <!--          <td>
                                <form method="post" action="{{ route('ver.contrato') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="contrato" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Ver contrato</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            -->
                            <td>
                                <form method="post" action="{{ route('docente.contratoD') }}" accept=".pdf" enctype="multipart/form-data">
                                @csrf              
              
                                <div class="d-flex justify-content-evenly" style="margin-top:50px;">
                                <div>
                                    <input type="file" name="contrato"/>
                                    <span class="text-danger">@error('contrato'){{ $message }} @enderror</span>
                                </div>

         
                                <div class=" " >
                                <button type="submit"  name="id" value="{{$item->id}}" class="btn btn-primary" style="background-color: #215f88;">Actualizar contrato</button>
                           
                                </div>
                                </div>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    
                </table>
                
         
            
        </div>
        </div>
    </section>
    @endsection
