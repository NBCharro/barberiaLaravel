@extends ('layout.mainLayout')
@section('content-title', 'Reservar cita')
@section('content-area')
    <h1 class="link-info h1 py-3">Reservar cita</h1>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>
        <hr />
    @endif
    <div class="container text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('reservas.store') }}" method="post" class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                value="{{ old('nombre') }}">
                        </div>
                        <div class="col-sm-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"
                                value="{{ old('telefono') }}">
                        </div>

                        <div class="col-12 py-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="tunombre@email.com" value="{{ old('email') }}">
                        </div>

                        <div class="col-sm-6">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha"
                                min="{{ $tomorrow }}" value="{{ old('fecha') ? old('fecha') : $tomorrow }}">
                        </div>
                        <div class="col-6">
                            <label for="hora" class="form-label">Hora</label>
                            <select name="hora" id="hora" class="form-select">
                                <option {{ old('hora') == '10:00 - 11:00' ? 'selected' : '' }}>10:00 - 11:00</option>
                                <option {{ old('hora') == '11:00 - 12:00' ? 'selected' : '' }}>11:00 - 12:00</option>
                                <option {{ old('hora') == '12:00 - 13:00' ? 'selected' : '' }}>12:00 - 13:00</option>
                                <option {{ old('hora') == '13:00 - 14:00' ? 'selected' : '' }}>13:00 - 14:00</option>
                                <option {{ old('hora') == '14:00 - 15:00' ? 'selected' : '' }}>14:00 - 15:00</option>
                                <option disabled>...</option>
                                <option {{ old('hora') == '17:00 - 18:00' ? 'selected' : '' }}>17:00 - 18:00</option>
                                <option {{ old('hora') == '18:00 - 19:00' ? 'selected' : '' }}>18:00 - 19:00</option>
                                <option {{ old('hora') == '19:00 - 20:00' ? 'selected' : '' }}>19:00 - 20:00</option>
                                <option {{ old('hora') == '20:00 - 21:00' ? 'selected' : '' }}>20:00 - 21:00</option>
                            </select>
                        </div>

                        <div class="col-sm-6 py-5">
                            <label for="servicio" class="form-label">Servicio</label>
                            <select name="servicio" id="servicio" class="form-select">
                                <option {{ old('servicio') == 'Corte de pelo - 14€' ? 'selected' : '' }}>Corte de pelo -
                                    14€</option>
                                <option {{ old('servicio') == 'Corte y afeitado - 24€' ? 'selected' : '' }}>Corte y
                                    afeitado - 24€</option>
                                <option {{ old('servicio') == 'Corte al cero - 9€' ? 'selected' : '' }}>Corte al cero - 9€
                                </option>
                                <option {{ old('servicio') == 'Corte con lavado y peinado - 17€' ? 'selected' : '' }}>Corte
                                    con lavado y peinado - 17€</option>
                                <option {{ old('servicio') == 'Afeitado - 11€' ? 'selected' : '' }}>Afeitado - 11€</option>
                                <option {{ old('servicio') == 'Arreglo de barba - 8€' ? 'selected' : '' }}>Arreglo de barba
                                    - 8€</option>
                                <option {{ old('servicio') == 'Arreglo y perfilado de barba - 12€' ? 'selected' : '' }}>
                                    Arreglo y perfilado de barba - 12€</option>
                                <option {{ old('servicio') == 'Corte y arreglo de barba - 21€' ? 'selected' : '' }}>Corte y
                                    arreglo de barba - 21€</option>
                                <option
                                    {{ old('servicio') == 'Corte, arreglo y perfilado de barba - 25€' ? 'selected' : '' }}>
                                    Corte, arreglo y perfilado de barba - 25€</option>
                            </select>
                        </div>
                        <div class="col-sm-6 py-5">
                            <label for="trabajadora" class="form-label">Trabajadora</label>
                            <select name="trabajadora" id="trabajadora" class="form-select">
                                <option selected>Cualquiera</option>
                                <option {{ old('trabajadora') == 'Xhemi' ? 'selected' : '' }}>Xhemi</option>
                                <option {{ old('trabajadora') == 'Guilherme' ? 'selected' : '' }}>Guilherme</option>
                                <option {{ old('trabajadora') == 'Andrea' ? 'selected' : '' }}>Andrea</option>
                                <option {{ old('trabajadora') == 'Anna' ? 'selected' : '' }}>Anna</option>
                            </select>
                        </div>


                        <hr class="my-4">

                        <div class="w-25"></div>

                        <button class="w-50 btn btn-lg btn-info fw-bold border-white" type="submit" id="botonReservar">
                            Reservar cita
                        </button>
                    </div>
                </form>
            </div>

            <div class="col"></div>
        </div>
    </div>
    <script>
        const datosCitas = @json($citas);
        console.log(datosCitas);

        const fecha = document.getElementById("fecha");
        const hora = document.getElementById("hora");
        const trabajadora = document.getElementById("trabajadora");
        const botonReservar = document.getElementById("botonReservar");

        fecha.addEventListener('change', comprobarDisponibilidad)
        hora.addEventListener('change', comprobarDisponibilidad)
        trabajadora.addEventListener('change', comprobarDisponibilidad)

        function comprobarDisponibilidad() {
            botonReservar.disabled = false

            let numeroTrabajadoras = 0;

            datosCitas.forEach(element => {
                if (coincideFechaYHora(element)) {
                    if (disponibilidadEmpleadaElegida(element.trabajadora)) {
                        botonReservar.disabled = true;
                    }
                    numeroTrabajadoras++;
                }
            });
            // Deberia ser == pero al no poder establecer un maximo en el seeder he puesto >=
            // Pero en produccion bastaria con == ya que se controla el maximo desde un principio
            if (numeroTrabajadoras >= 4) {
                botonReservar.disabled = true
            }
        }

        function coincideFechaYHora(element) {
            if (fecha.value == element.fecha && hora.value == element.hora) {
                return true
            }
            return false;
        }

        function disponibilidadEmpleadaElegida(empleada) {
            if (trabajadora.value == empleada && trabajadora.value != "Cualquiera") {
                return true
            }
            return false;
        }

        comprobarDisponibilidad();
    </script>
@endsection
