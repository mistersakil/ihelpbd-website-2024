<div>
    <label for="title" class="form-label">{{ __('title') }}</label>
    <div class="input-group has-validation">
        <span class="input-group-text" id="title">
            <i class="{{ _icons('user') }}"></i>
        </span>
        <input wire:model.blur="state.title" type="text" class="form-control is-valid" id="title" required>
        <div class="valid-feedback">
            {{ __('slide title required') }}
        </div>
    </div>
</div>
