<ul
        class="nav nav-tabs"
        id="navId"
        role="tablist"
    >
        <li class="nav-item">
            <a
                href="#tab1Id"
                class="nav-link active"
                data-bs-toggle="tab"
                aria-current="page"
                >Acerca de</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
                >Contáctanos</a
            >
        </li>

        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
                >Ayuda</a
            >
        </li>

        <li class="nav-item" role="presentation">
            <a href="{{route('login')}}" class="nav-link"
                >Login</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{route('register')}}" class="nav-link" 
                >Register</a
            >
        </li>
        @auth
        <li>
            <form action="{{ route('logout')}}" method="post">
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

