<x-layouts.app>
    <x-slot name="header"> Upload Empledo </x-slot>
    <div class="container">
        <x-forms.employee
            method="post"
            action="{{ route('employees.update', $id) }}"
        >
            @method('patch')
            <div class="form-group">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </x-forms.employee>
    </div>
</x-layouts.app>
