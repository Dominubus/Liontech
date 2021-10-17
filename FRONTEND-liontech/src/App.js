import logo from './imagenes/logo-umss.png';
import icono from './imagenes/icono-fcyt.png';
import portada from './imagenes/portada.png';
import './App.css';
import './iconos.css';
import './footers.css';
function App() {
  return (
    <body>
      <div>


       {/*  <img src={logo} class=" rounded float-start" ></img>

        <h1 class="fs-3">
          FACULTAD DE CIENCIAS Y TECNOLOGIA
        </h1>

        <img src={icono} class=" rounded float-end" ></img>
        <h1 class="text-end">
          UNIVERSIDAD MAYOR DE SANSIMON
        </h1> */}
     <img src={portada} class="rounded mx-auto d-block portada" ></img>
 

      </div>
      <header>
        <div>
          <h2 class="textos">Sistema de Apoyo a la Empresa TIS</h2>
        </div>
  

        <nav class="navbar navbar-light bg-light navbar-dark bg-primary d-flex justify-content-evenly navg">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link active " aria-current="page" href="/">INICIO</a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link " href="">Inciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Registrar funda empresa TIS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Documento Base</a>
            </li>
          </ul>
        </nav>

      

      </header>
      
      <section>
        <div class="d-flex justify-content-center">
          <div class="col-sm-6">
            <div class="card">
            <h2 class="align-items-center textos">
          Publicacion de convocatoria TIS
        </h2>
              <div class="card-body">
                <h5 class="card-title">Empresa TIS</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="card">
            <h2 class="align-items-center textos">
          Avisos
        </h2>
              <div class="card-body">
                <h5 class="card-title">Aviso importante   :</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

              </div>
            </div>
          </div>
        </div>
     
      </section>
      <footer class="bg-dark text-white">
        <div class="container">
          <nav class="row">


            <a class="col-sm-6 text-reset text-uppercase d-flex align-items-center">
            {/*   <img src={icono} class="img-logo mr-2"></img> */}
              <div >
              <h2>
                CONTACTOS
              </h2>
              <p>Telefono:(+591)75929577 </p>
              <p>Email:lion.tech05@gmail.com</p>
            </div>
            </a>
            {/* <ul class="col-3 list-unstyled">
              <li class=" font-weight-bold text-uppercase">resource
              </li>
              <li><a href="#" class="text-reset">Link 1</a></li>
              <li><a href="#" class="text-reset">Link 2</a></li>
              <li><a href="#" class="text-reset">Link 3</a></li>
              <li><a href="#" class="text-reset">Link 4</a></li>
              <li><a href="#" class="text-reset">Link 5</a></li>
            </ul> */}
            {/* <ul class="col-3 list-unstyled">
              <li class=" font-weight-bold text-uppercase">quick links
              </li>
              <li><a href="#" class="text-reset">Link 1</a></li>
              <li><a href="#" class="text-reset">Link 2</a></li>
              <li><a href="#" class="text-reset">Link 3</a></li>
              <li><a href="#" class="text-reset">Link 4</a></li>
              <li><a href="#" class="text-reset">Link 5</a></li>
            </ul> */}
            <ul class="col-sm-6 list-unstyled redes-container ">
            <h2>
                REDES SOCIALES
              </h2>

              <ul>
                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                {/*
<li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
<li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
*/}

              </ul>


            </ul>
          </nav>

        </div>
      </footer>


    </body>
  );
}

export default App;
