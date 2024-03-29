@extends ('layouts.mainLayout')
@section('content-title', 'Reservar cita')
@section('content-area')
    <h1 class="link-info h1 py-3">Reservar cita</h1>
    <hr>
    <br>
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
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6">
                <form action="{{ route('reservas.store') }}" method="post" class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 py-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                value="{{ old('nombre') }}">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"
                                value="{{ old('telefono') }}">
                        </div>
                        <div class="col-12 py-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="nombre@email.com" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha"
                                min="{{ $tomorrow }}" value="{{ old('fecha') ? old('fecha') : $tomorrow }}">
                        </div>
                        <div class="col-md-6 py-3">
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
                        <div class="col-md-6 py-3">
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
                        <div class="col-md-6 py-3">
                            <label for="trabajadora" class="form-label">Trabajadora</label>
                            <select name="trabajadora" id="trabajadora" class="form-select">
                                <option selected>Cualquiera</option>
                                <option {{ old('trabajadora') == 'Xhemi' ? 'selected' : '' }}>Xhemi</option>
                                <option {{ old('trabajadora') == 'Guilherme' ? 'selected' : '' }}>Guilherme</option>
                                <option {{ old('trabajadora') == 'Andrea' ? 'selected' : '' }}>Andrea</option>
                                <option {{ old('trabajadora') == 'Anna' ? 'selected' : '' }}>Anna</option>
                            </select>
                        </div>
                        <div class="col-12 my-4 text-center">
                            <button class="btn btn-lg btn-info fw-bold border-white" type="submit" id="botonReservar">
                                Reservar cita
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script>
        const datosCitas = @json($citas);

        const fecha = document.getElementById("fecha");
        const hora = document.getElementById("hora");
        const trabajadora = document.getElementById("trabajadora");
        const botonReservar = document.getElementById("botonReservar");

        comprobarDisponibilidad();

        fecha.addEventListener('change', comprobarDisponibilidad)
        hora.addEventListener('change', comprobarDisponibilidad)
        trabajadora.addEventListener('change', comprobarDisponibilidad)

        function comprobarDisponibilidad() {
            // Si es fin de semana, bloqueo el boton y retorno la funcion ya que no quiero hacer mas calculos
            if (esFinDeSemana()) {
                botonReservar.disabled = true
                return
            }

            botonReservar.disabled = false

            let numeroTrabajadoras = 0;

            // Recorro todas las fechas
            datosCitas.forEach(element => {
                // Si la fecha y la hora de mi BD coincide con lo elegido aumento el numero de trabajadoras
                if (coincideFechaYHora(element)) {
                    // Si ademas, la trabajadora esta ocupada a esa hora, directamente bloqueo el boton de reservar cita
                    if (disponibilidadEmpleadaElegida(element.trabajadora)) {
                        botonReservar.disabled = true;
                    }
                    numeroTrabajadoras++;
                }
            });
            // Deberia ser == pero al no poder establecer un maximo en el seeder he puesto >=
            // Pero en produccion bastaria con == ya que se controla el maximo desde un principio
            if (numeroTrabajadoras >= 4) {
                // Si el numero de trabajadoras es igual o mayor de 4, significa que todas estan ocupadas asi que bloqueo el boton de reservar cita
                botonReservar.disabled = true
            }
        }

        function esFinDeSemana() {
            let finDeSemana = false;
            const numeroDia = new Date(fecha.value).getDay();
            const dias = [
                'domingo',
                'lunes',
                'martes',
                'miércoles',
                'jueves',
                'viernes',
                'sábado',
            ];
            const nombreDia = dias[numeroDia];
            if (nombreDia == 'sábado' || nombreDia == 'domingo') {
                finDeSemana = true;
            } else {
                finDeSemana = false;
            }
            return finDeSemana;
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
    </script>
@endsection
