<div>
    <form wire:submit.prevent="saveChanges">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
