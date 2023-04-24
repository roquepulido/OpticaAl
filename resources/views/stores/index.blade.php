<x-layouts.app>
    <x-slot name="header"> Tiendas </x-slot>
    <x-slot name="btn">
        <a
            href="{{ route('stores.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
        >
            <i class="fas fa-plus"></i>
            Crear Tienda
        </a>
    </x-slot>
    <x-slot name="customJs">
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const updateModal = new bootstrap.Modal(
                document.getElementById("updateModal")
            );
            const btnSubmit = document.getElementById("btnSubmit");
            const updateForm = document.forms.updateForm;
            $(document).ready(function () {
                $("#dataTable").DataTable();
            });
            async function update(id) {
                const url = "{{route('stores.index')}}/" + id;
                const data = await fetch(url).then((res) => res.json());

                updateForm.id.value = data.id;
                updateForm.name.value = data.name;
                updateForm.street.value = data.street;
                updateForm.number.value = data.number;
                updateForm.suburb.value = data.suburb;
                updateForm.city.value = data.city;
                updateForm.state.value = data.state;
                updateForm.postcode.value = data.postcode;
                updateForm.stateAbbr.value = data.stateAbbr;
                updateForm.phone.value = data.phone;
                updateForm.email.value = data.email;
                updateForm.action = url;
                btnSubmit.addEventListener("click", async () => {
                    updateForm.submit();
                });
                updateModal.show();
            }
            async function del(id) {
                Swal.fire({
                    title: "Estas seguro?",
                    text: "No se podra recuperar",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, Borrar",
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        const res = await fetch(
                            "{{route('stores.index')}}/delete/" + id
                        ).then((res) => res.text());
                        if (res == "ok") {
                            Swal.fire({
                                icon: "success",
                                title: "Exito",
                                text: "Registro Borrado",
                            }).then(() => location.reload());
                        }
                    }
                });
            }
        </script>

        @if($message =Session::get('status' ))
        <script>
            $(document).ready(() => {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "{{$message}}",
                    showConfirmButton: false,
                    timer: 1500,
                });
            });
        </script>
        @endif
    </x-slot>
    <x-slot name="updateModal">
        <div
            class="modal fade"
            id="updateModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="updateModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">
                            Actualizar datos
                        </h5>
                        <button
                            class="close"
                            type="button"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="updateForm" name="updateForm" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="id" />
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button
                            class="btn btn-secondary"
                            type="button"
                            data-dismiss="modal"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            id="btnSubmit"
                            class="btn btn-primary"
                        >
                            Actualizar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Tiendas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Calle</th>
                            <th>Numero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>CP</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Calle</th>
                            <th>Numero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>CP</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($stores as $key => $store)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$store->name}}</td>
                            <td>{{$store->street}}</td>
                            <td>{{$store->number}}</td>
                            <td>{{$store->suburb}}</td>
                            <td>{{$store->city}}</td>
                            <td>{{$store->state}}</td>
                            <td>{{$store->phone}}</td>
                            <td>{{$store->email}}</td>
                            <td>{{$store->postcode}}</td>
                            <td>
                                @can('edit')
                                <a onclick="update({{$store->id}});">
                                    <i class="fas fa-edit"></i>
                                </a>

                                @endcan @can("delete")
                                <a onclick="del({{$store->id}});">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
