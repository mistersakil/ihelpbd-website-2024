<div class="form-check form-switch form-check-success">
    <input wire:model="isActive" wire:change="changeStatus" class="form-check-input" type="checkbox" role="switch"
        id="isActive">
    <label class="form-check-label" for="isActive">
        {{ $statusText }}
    </label>
</div>
