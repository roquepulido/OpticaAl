<x-app-layout>
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session("status") }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre(s)</th>
                    <th scope="col">Apellido(s)</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Diagnostico</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->diagnostic->name}}</td>
                    <td>
                        <a
                            name=""
                            id="btn"
                            class="btn btn-warning mx-2"
                            href="#"
                            role="button"
                            >edit</a
                        ><a
                            name=""
                            id=""
                            class="btn btn-danger mx-2"
                            href="#"
                            role="button"
                            >delete</a
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("btn").addEventListener("click", () => {
            Swal.fire({
                title: "Error!",
                text: "Do you want to continue",
                icon: "error",
                confirmButtonText: "Cool",
            });
        });
    </script>
</x-app-layout>
