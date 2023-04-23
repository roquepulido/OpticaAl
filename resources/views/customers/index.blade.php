<x-layouts.app>
    <x-slot name="header"> Clientes </x-slot>
    <x-slot name="btn">
        <a
            href="{{ route('customers.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
        >
            <i class="fas fa-plus"></i>
            Crear Cliente</a
        >
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
                const url = "{{route('customers.index')}}/" + id;
                const data = await fetch(url).then((res) => res.json());
                console.log(data);
                updateForm.id = data.id;
                updateForm.name.value = data.name;
                updateForm.last_name.value = data.last_name;
                updateForm.phone.value = data.phone;
                updateForm.email.value = data.email;
                updateForm.diagnostic_id.value = data.diagnostic_id;
                btnSubmit.addEventListener("click", async () => {
                    const dataForm = Object.fromEntries(
                        new FormData(updateForm).entries()
                    );
                    const response = await fetch(url, {
                        method: "PUT",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: dataForm,
                    }).then((res) => res.text());
                    console.log(response);
                });
                updateModal.show();
            }
            function del(id) {
                alert("delete" + id);
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
                        <form id="updateForm" name="updateForm" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" />
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
                                <div class="form-group">
                                    <label for="diagnostico">Diagnostico</label>
                                    <select
                                        class="form-control"
                                        id="diagnostico"
                                        name="diagnostic_id"
                                    >
                                        @foreach($diags as $diag )
                                        <option value="{{$diag->id}}">
                                            {{$diag->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
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
            <h6 class="m-0 font-weight-bold text-primary">Lista de clientes</h6>
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
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Diagnostico</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Diagnostico</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($customers as $id => $customer)
                        <tr>
                            <td>{{ $id + 1 }}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->diagnostic->name}}</td>
                            <td>
                                <a onclick="update({{$customer->id}})">
                                    <i class="fas fa-edit fs-6"></i>
                                </a>
                                <a onclick="del({{$customer->id}})">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#updateModal"
    >
        Launch demo modal
    </button>
</x-layouts.app>
