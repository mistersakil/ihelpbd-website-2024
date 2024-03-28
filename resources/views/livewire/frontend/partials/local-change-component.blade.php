<li>
    {{-- @json($locals) --}}
    <select wire:model='selectedLocal' class="form-select" wire:change='changeLocaleAction'>
        @foreach ($locals as $localKey => $local)
            <option value="{{ $localKey }}" selected>{{ $local }}</option>
        @endforeach
    </select>
</li>
