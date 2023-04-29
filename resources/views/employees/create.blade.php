<x-layouts.app>
    <x-slot name="header"> Agregar Empledo </x-slot>
    <div class="container">
        <x-forms.employee method="post" action="{{ route('employees.store') }}">
            <div class="form-group">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </x-forms.employee>
    </div>
</x-layouts.app>
