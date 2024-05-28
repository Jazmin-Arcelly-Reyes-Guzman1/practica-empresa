<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFA500;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: black;">
        <span style="font-size: 15pt">&#127984;</span> Empresa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}" style="color: black;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services.service') }}" style="color: black;">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects.project') }}" style="color: black;">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.customer') }}" style="color: black;">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs.blog') }}" style="color: black;">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacts.contact') }}" style="color: black;">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
