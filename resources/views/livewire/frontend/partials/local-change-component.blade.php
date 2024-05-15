<select wire:model='selectedLocale' wire:change='changeLocale' class="form-select">
    @foreach ($locales as $localKey => $local)
        <option class="dropdown-item" value="{{ $localKey }}">
            {{ $local }}
        </option>
    @endforeach
</select>
