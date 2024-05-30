<div>
    <form wire:submit.prevent="save">
        <input type="hidden" wire:model="updateId">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" wire:model="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="confirmPassword" wire:model="confirmPassword">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
