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
            $(document).ready(function () {
                $("#dataTable").DataTable();
            });
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
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
