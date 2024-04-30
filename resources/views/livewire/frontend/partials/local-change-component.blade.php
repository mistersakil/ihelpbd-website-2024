<select wire:model='selectedLocal' wire:change='changeLocaleAction' class="form-select aria-labelledby="language1">
    @foreach ($locals as $localKey => $local)
        <option class="dropdown-item" value="{{ $localKey }}">
            {{ $local }}
        </option>
    @endforeach
</select>
