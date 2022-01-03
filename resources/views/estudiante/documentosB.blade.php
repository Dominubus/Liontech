@extends('layouts.plantillaEstudiante')

    
      @section('cuerpo')
      <section >
        <div class="container mt-5 mb-5">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-12">
            <h2 class="align-items-center avisos text-light">
              DOCUMENTOS BASE
            </h2>
            <a class="card cardTabla" href="https://drive.google.com/file/d/1Kpy9tuMYdj1oB15c8nPVqKenT2fMZ2XX/view?usp=sharing">Pliego de Especificaciones (PETIS)-II/2021</a>
            <h2 class="align-items-center avisos text-light">
              ENTREGAS
            </h2>
            
            <div class="card cardTabla">
              {{--   @foreach ($convocatorias as $convocatorias)
                  <h5 class="card-title text-ligth">{{$convocatorias->name }}</h5>
                  
                  <p class="card-text">link documento:
                  <a class="" href="https://drive.google.com/file/d/1Kpy9tuMYdj1oB15c8nPVqKenT2fMZ2XX/view?usp=sharing">{{$convocatorias->nombre }}</a></p>
                  <p class="card-text">codigo: {{$convocatorias->codigo }}</p>
                  <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
                  <p class="card-text">Semestre: {{$convocatorias->semestre}}</p> 
                  @endforeach  --}}
                  
              </div>
          </div>
        </div>
      </div>
      </section>
@endsection
