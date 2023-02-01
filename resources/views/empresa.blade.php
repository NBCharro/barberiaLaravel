@extends ('layouts.mainLayout')
@section('content-title', 'Empresa')
@section('content-area')
    <h1 class="link-info h1 py-3">Sobre nosotras</h1>
    <hr>
    <div class="container text-center">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Llevamos más de 10 años asesorando a nuestra clientela.</h2>
                    <hr class="featurette-divider">
                    <p>
                        Desde Barbería Laravel nos preocupamos de nuestros clientes ayudando a asesorar y mejorar
                        la imagen de estos con la experiencia que durante años hemos logrado.
                    </p>
                    <p>
                        Con una amplia formación en el
                        cuidado del cabello y de la imagen personal, respetando el estilo propio de cada uno de nuestros
                        clientes que confían año tras año en una barbera moderna y dinámica.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="h-100 p-5 bg-light text-dark border rounded-3">
                    <h2>Confianza y cercanía</h2>
                    <hr class="featurette-divider">
                    <p>
                        En Barbería Laravel te sentirás como en casa, puesto que uno de nuestros máximos valores
                        es la confianza, la cercanía con el cliente y el trato próximo.
                    </p>
                    <p>
                        La Barbería Laravel es la Peluquería y Barbería más antigua de León; ubicada en la calle Leñeros 23,
                        abrió sus puertas el 2 de enero del año 1900 y desde entonces, hace ya más de
                        un siglo, ha permanecido abierta
                        de manera ininterrumpida superando, obras y reformas de mejora, vacaciones, revueltas e incluso
                        guerras.
                    </p>
                </div>
            </div>
        </div>

        <div class="p-5 mb-4 rounded-3">
            <div class="container-fluid">
                <h2 class="display-5 fw-bold">Equipo</h2>
                <hr class="featurette-divider">
                <div class="row row-cols-4">
                    <div class="col">
                        <div class="card border-dark">
                            <img src="./images/equipo/xhemi.jpg" class="card-img-top" alt="Fotografia de Xhemi">
                            <div class="card-body bg-dark text-light">
                                <h5 class="card-title h3">Xhemi</h5>
                                <p class="card-text">
                                    Muy positiva, sonriente, meticulosa y perfeccionista, su comienzo en el
                                    mundo de la estética, es en salones de belleza femenina. Su habilidad con las barbas
                                    no la descubriría hasta su llegada a la Barbería Laravel donde su destreza es admirable.
                                    Hoy madre de
                                    dos pequeñas, compagina su amor por ellas con el amor a su trabajo, cosa que trasmite en
                                    cada servicio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="./images/equipo/guilherme.jpg" class="card-img-top" alt="Fotografia de Guilherme">
                            <div class="card-body bg-light text-dark">
                                <h5 class="card-title h3">Guilherme</h5>
                                <p class="card-text">
                                    Inquieta, alegre, con mirada cómplice, es una mujer que llego muy joven con una clara
                                    inquietud por la barbería. Con 19 años y con unas grandes actitudes comienza en la
                                    Barbería Laravel,
                                    donde desarrolla una evolución exponencial. Sus inquietudes la llevarán a seguir
                                    formándose y evolucionando hasta alzarse como ganadora del concurso mundial de barbería
                                    2020.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-dark">
                            <img src="./images/equipo/andrea.jpg" class="card-img-top" alt="Fotografia de Andrea">
                            <div class="card-body bg-dark text-light">
                                <h5 class="card-title h3">Andrea</h5>
                                <p class="card-text">
                                    Habilidosa en artes tan distintas como la barbería y la música. Su
                                    destreza es la empatía con el cliente y su gusto para asesorar, su mejor arma. Es en la
                                    barbería mejor valorada de Murcia, su ciudad natal, donde pasa los primeros años de
                                    profesión. La música la empuja a Madrid, pero su vocación barbera la hace entrar a
                                    formar parte de la Barbería Laravel. Comparte ambas disciplinas con soltura.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="./images/equipo/anna.jpg" class="card-img-top" alt="Fotografia de Anna">
                            <div class="card-body bg-light text-dark">
                                <h5 class="card-title h3">Anna</h5>
                                <p class="card-text">
                                    Una joven madrileña que desde niña mostró interés por la barbería. Se formó durante 2
                                    años en la escuela de peluquería y barbería Turón, participó en eventos de peluquería
                                    así como en cursos con las mejores y más reputadas barberas de la actualidad. Con 23
                                    años y tras una gran formación académica se incorpora al equipo de la
                                    Barbería Laravel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
