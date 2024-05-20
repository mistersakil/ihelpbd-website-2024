<div class="form-check form-switch form-check-success">
    <input wire:model="isActive" wire:change="changeStatus" class="form-check-input" type="checkbox" role="switch"
        id="isActive_{{ $this->modelId }}">
    <label class="form-check-label" for="isActive_{{ $this->modelId }}">
        {{ $statusText }}
    </label>
</div>
