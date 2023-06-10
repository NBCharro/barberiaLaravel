<footer class="py-3 my-4 border-top">
    <div class="container-lg d-md-flex justify-content-between align-items-center flex-wrap">
        <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-3 mb-md-0">
            <a href="{{ route('inicio') }}" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img src="{{ asset('images/logoCompletoNegro.png') }}" width="100px" height="50px"
                    alt="Logo Barberia Laravel">
            </a>
        </div>

        <div class="mb-3 mb-md-0 text-center">© 2023 Barberia Laravel</div>

        <ul class="nav col-md-4 justify-content-center justify-content-md-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-muted" href="tel:111-222-333">
                    <img src="{{ asset('images/rrss/telephone.png') }}" alt="Telefono de contacto 111-222-333">
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="mailto:info@barberialaravel.com">
                    <img src="{{ asset('images/rrss/email.png') }}" alt="Email de contacto info@barberialaravel.com">
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <img src="{{ asset('images/rrss/twitter.png') }}" alt="Enlace a Twitter">
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <img src="{{ asset('images/rrss/instagram.png') }}" alt="Enlace a Instagram">
                </a>
            </li>
            <li class="ms-3">
                <a class="text-muted" href="#">
                    <img src="{{ asset('images/rrss/facebook.png') }}" alt="Enlace a Facebook">
                </a>
            </li>
        </ul>
    </div>
</footer>
