@extends ('layouts.mainLayout')
@section('content-title', 'Servicios')
@section('content-area')
    <h1 class="link-info h1 py-3">Servicios</h1>
    <hr>
    <br>
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
                Corte peluquería a niños <span class="text-muted">Su estilo propio</span>
            </h2>
            <p class="lead">Desde temprana edad, los niños también necesitan cuidado en su peinado, no solo los adultos. En
                Barbería Laravel estamos aquí para los padres preocupados desde el día uno, brindando un buen mantenimiento
                y crecimiento del cabello.
            </p>
            <p class="lead">La visita al peluquero se convierte en una experiencia normal para los niños, ya que aprenden a
                acostumbrarse al ruido de la maquinilla y las tijeras convirtiendo la visita en algo normal.
            </p>
        </div>
        <div class="col-md-5">
            <img src="./images/servicios/ninios.jpg" width="100%" alt="Corte peluquería a niños">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
                Servicio a domicilio <span class="text-muted">Directamente a tu puerta</span>
            </h2>
            <p class="lead">Te presentamos nuestro servicio a domicilio para aquellas personas que no se
                pueden desplazar a nuestra barbería.
            </p>
            <p class="lead">
                Elige nuestro servicio a domicilio si necesitas lucir perfecto en
                momentos importantes, como
                entrevistas de trabajo, reuniones de negocios, citas inesperadas o comidas de empresa.
            </p>
            <p class="lead">Apuesta por un traje
                elegante, pero también por una imagen impecable. Imprescindible pedir día y hora.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="./images/servicios/domicilio.jpg" width="100%" alt="Servicio a domicilio">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
                Servicio express <span class="text-muted">Jaque mate</span>
            </h2>
            <p class="lead">
                Con nuestro servicio, no hay necesidad de esperar largas horas en la silla de barbería, simplemente llega y
                recibe un corte profesional en poco tiempo.
            </p>
            <p class="lead">
                Nuestras barberas están altamente capacitadas y utilizan herramientas de alta calidad para asegurarse de que
                cada cliente salga satisfecho con su corte.
            </p>
            <p class="lead">
                Con nuestro servicio express, no tienes que sacrificar la calidad por la comodidad. Te garantizamos un
                peinado perfecto, con la máxima eficiencia y profesionalismo.
            </p>
        </div>
        <div class="col-md-5">
            <img src="./images/servicios/express.jpg" width="100%" alt="Servicio express">
        </div>
    </div>
@endsection
