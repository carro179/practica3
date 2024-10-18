<ul class="nav nav-tabs" id="navId" role="tablist">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Catálogo</a>
        <div class="dropdown-menu">
            <a class="dropdown-item">Periodos</a>
            <a class="dropdown-item">Plazas</a>
            <a class="dropdown-item">Puestos</a>
            <a class="dropdown-item">Personal</a>
            <a class="dropdown-item">Deptos. </a>
            <a class="dropdown-item">Carreras</a>
            <a class="dropdown-item">Retículas</a>
            <a class="dropdown-item">Materias</a>
            <a class="dropdown-item">Alumnos</a>

        </div>
    </li>
    <li class="nav-item" role="presentation">
        <div class="btn-group dropright">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">Horarios</a>
            <div class="dropdown-menu">
                <a class="dropdown-item">Docentes</a>
                <a class="dropdown-item">Alumnos</a>
            </div>
        </div>
    </li>
    <li class="nav-item" role="presentation">
        <div class="btn-group dropright">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">Proyectos Individuales</a>
            <div class="dropdown-menu">
                <a class="dropdown-item">Capacitación</a>
                <a class="dropdown-item">Asesorías Doc.</a>
                <a class="dropdown-item" >Proyectos</a>
                <a class="dropdown-item" >Material Didáctico</a>
                <a class="dropdown-item" >Docencia e Inv.</a>
                <a class="dropdown-item" >Asesoría Proyectis Ext.</a>
                <a class="dropdown-item" >Asesoría a S.S</a>
            </div>
        </div>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Instrumentación</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Tutorías</a>
    </li>
    <li class="nav-item" role="presentation">
        <select name="Periodos" id="Periodos">
            <option value="">Selecciona una opción</option>
            <option value="ENE-JUN-24">ENE-JUN-24</option>
            <option value="AGO-DIC-24">AGO-DIC-24</option>
            <option value="ENE-JUN-25">ENE-JUN-25</option>
        </select>
    </li>

    @guest
        <li class="nav-item" role="presentation">
            <a href="{{ route('login') }}" class="nav-link" data-bs-toggle="tab">Login</a>
        </li>
    @endguest
    @auth
        <li class="nav-item" role="presentation">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button>Log out</button>
            </form>
        </li>
    @endauth
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

    </div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
    var triggerEl = document.querySelector("#navId a");
    bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>
