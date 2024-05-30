<table class="table-auto w-full">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-warning">Editar</button>
                    <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Aquí irían los modales para edición y eliminación -->
