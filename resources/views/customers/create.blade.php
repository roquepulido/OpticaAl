<x-app-layout>
    <div class="container">
        <h1>Creacion de Cliente</h1>
        <form method="post" action="{{ route('customers.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre(s):</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Ingresa nombre"
                    required
                />
            </div>
            <div class="form-group">
                <label for="last_name">Apellido(s):</label>
                <input
                    type="text"
                    class="form-control"
                    id="last_name"
                    name="last_name"
                    placeholder="Ingresa Apellido"
                    required
                />
            </div>
            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Ingresa numero"
                    required
                />
            </div>
            <div class="form-group">
                <label for="phone">Email:</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Ingresa correo"
                    required
                />
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnostico</label>
                <select
                    class="form-control"
                    id="diagnostico"
                    name="diagnostic_id"
                >
                    @foreach($diags as $diag )
                    <option value="{{$diag->id}}">{{$diag->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</x-app-layout>
