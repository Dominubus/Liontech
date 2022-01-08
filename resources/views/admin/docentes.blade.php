<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9ac0673dac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/App.css">
    <link rel="stylesheet" href="../CSS/iconos.css">
    <link rel="stylesheet" href="../CSS/nav.css">  
    <link rel="stylesheet" href="../CSS/fondos.css"> 
    <link rel="stylesheet" href="../CSS/cabecera.css"> 
    <link rel="stylesheet" href="../CSS/formulario.css"> 
    <link rel="stylesheet" href="../CSS/nav2.css"> 
    <script src="../CSS/script.js" defer></script>
    <title>Lista Docentes</title>
    <nav class="navbar"  >
            
        <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          
          <ul>
            <li>  <a> @foreach ($usuarios as $usuarios)
              Usuario: {{$usuarios->nombre}}
              @endforeach
            </a></li> 
            <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
  
        
      </ul>
    </div>
  </div>
  </nav>
    <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss"> 
        <div class="cabeceraCssAzul"></div>
        <div class="cabeceraCssAzulClaro"></div>
        <div class="cabeceraCssBlanca"></div>
        <div class="textoCabecera h3">UNIVERSIDAD MAYOR DE SAN SIMON</div>
        <div class="textoCabeceraUniverisdad h3">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
        <img class="logoUmssCss" src="../../IMAGENES/LogoUMSS.png" alt="">
    </div>
        </head>
        <div>
          <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
        </div>

        <body>
        <header>
          <nav class="navbar" >
            <div class="brand-title"><div class="brand-title"> 
              @if($usuarios->tipo==1)
              ADMINISTRADOR
              @endif
            </div></div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li class="nav-item {{!Route::is('admin.inicioA')?:'active'}}"><a href="{{ route('admin.inicioA') }}">Inicio</a></li>
                <li class="nav-item {{!Route::is('admin.lista')?:'active'}}"><a href="{{ route('admin.lista') }}">Lista de empresas</a></li>
                <li class="nav-item {{!Route::is('admin.docentes')?:'active'}}"><a href="{{ route('admin.docentes') }}">Lista de docentes</a></li>
                <li class="nav-item {{!Route::is('admin.estudiantes')?:'active'}}"><a href="{{ route('admin.estudiantes') }}">Lista de estudiantes</a></li> 
                <li class="nav-item {{!Route::is('auth.registre2')?:'active'}}"><a href="{{ route('auth.register2') }}">Registrar docentes</a></li>
            
          </ul>
        </div>
      </nav>
          <section>
            {{ Breadcrumbs::render('admin.docentes') }}
            <div class="container mt-5 mb-5 ">
            <div class=" row d-flex justify-content-between cards ">
             
              <table class="table tabla">
                <thead class="tablaL">
                  
                  <th class="text-center" border="1">Correo</th>
                  <th class="text-center" border="1">Nombre</th>                  
                </thead>
                <tbody>
                   @foreach($data as $key=>$item)
                            
                  <tr>                 
              
                      <td align="center">
                          {{$item->username}}
                          
                      </td>
                      <td align="center">
                          {{$item->nombre}}                                
                      </td>                

                  </tr>
                  
              @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </section>
        <footer class="footer text-white">
          <div class="container">
              <nav class="row">
  
  
                  <a class="col-sm-6 text-reset text-uppercase d-flex align-items-center">
  
                      <div>
                          <h2>
                              CONTACTOS
                          </h2>
                          <p>Telefono:(+591)75929577 </p>
                          <p>Email:lion.tech05@gmail.com</p>
                      </div>
                  </a>
                  <ul class="col-sm-6 list-unstyled redes-container ">
                      <h2>
                          REDES SOCIALES
                      </h2>
  
                      <ul>
                          <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
  
                      </ul>
  
  
                  </ul>
              </nav>
  
          </div>
      </footer>
  
  
  </body>
  
  </html>

