<form {{$attributes}}>
    @csrf
    <div class="form-group">
        <label for="name">Nombre:</label>
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
        <label for="name">Apellido:</label>
        <input
            type="text"
            class="form-control"
            id="last_name"
            name="last_name"
            placeholder="Ingresa Apellidos"
            required
        />
    </div>
    <div class="form-group">
        <label for="street">Calle:</label>
        <input
            type="text"
            class="form-control"
            id="street"
            name="street"
            placeholder="Ingresa Calle"
            required
        />
    </div>
    <div class="form-group">
        <label for="number">Numero:</label>
        <input
            type="text"
            class="form-control"
            id="number"
            name="number"
            placeholder="Ingresa Apellido"
            required
        />
    </div>
    <div class="form-group">
        <label for="suburb">Colonia:</label>
        <input
            type="text"
            class="form-control"
            id="suburb"
            name="suburb"
            placeholder="Ingresa Colonia"
            required
        />
    </div>
    <div class="form-group">
        <label for="city">Ciudad:</label>
        <input
            type="text"
            class="form-control"
            id="city"
            name="city"
            placeholder="Ingresa Ciudad"
            required
        />
    </div>
    <div class="form-group">
        <label for="state">Estado:</label>
        <input
            type="text"
            class="form-control"
            id="state"
            name="state"
            placeholder="Ingresa Estado"
            required
        />
    </div>
    <div class="form-group">
        <label for="stateAbbr">Abreviatura:</label>
        <input
            type="text"
            class="form-control"
            id="stateAbbr"
            name="stateAbbr"
            placeholder="Ingresa Apellido"
            required
        />
    </div>
    <div class="form-group">
        <label for="postcode">CP:</label>
        <input
            type="text"
            class="form-control"
            id="postcode"
            name="postcode"
            placeholder="Ingresa Estado"
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
    {{ $slot }}
</form>
