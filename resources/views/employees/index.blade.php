<x-layouts.app>
    <x-slot name="header"> Empleados </x-slot>
    <x-slot name="btn">
        <a
            href="{{ route('employees.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
        >
            <i class="fas fa-plus"></i>
            Agregar Empleados
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
                const url = "{{route('employees.index')}}/" + id;
                const data = await fetch(url).then((res) => res.json());

                updateForm.name.value = data.name;
                updateForm.last_name.value = data.last_name;
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
                            "{{route('employees.index')}}/" + id,
                            {
                                method: "DELETE",
                                headers: {
                                    "X-CSRF-TOKEN": $(
                                        'meta[name="csrf-token"]'
                                    ).attr("content"),
                                },
                            }
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
                        <x-forms.employee
                            id="updateForm"
                            name="updateForm"
                            method="post"
                        >
                            @method('patch')
                        </x-forms.employee>
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
            <h6 class="m-0 font-weight-bold text-primary">
                Lista de Empleados
            </h6>
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
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Numero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>CP</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Numero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>CP</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->street}}</td>
                            <td>{{$employee->number}}</td>
                            <td>{{$employee->suburb}}</td>
                            <td>{{$employee->city}}</td>
                            <td>{{$employee->state}}</td>
                            <td>{{$employee->postcode}}</td>
                            <td>
                                @can('edit')
                                <a onclick="update({{$employee->id}});">
                                    <i class="fas fa-edit"></i>
                                </a>

                                @endcan @can("delete")
                                <a onclick="del({{$employee->id}});">
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
