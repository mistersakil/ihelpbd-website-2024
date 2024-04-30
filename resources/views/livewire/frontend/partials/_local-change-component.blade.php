{{-- <li>
    <select wire:model='selectedLocal' class="form-select" wire:change='changeLocaleAction'>
        @foreach ($locals as $localKey => $local)
            <option value="{{ $localKey }}" selected>{{ $local }}</option>
        @endforeach
    </select>
</li> --}}

<div class="navbar-language navbar-language-mt dropdown language-option">
    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="bx bx-world"></i>
        <span class="lang-name"></span>
    </button>
    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
        <a class="dropdown-item" href="#">
            {{-- <img src="assets/images/uk.png" alt="flag"> --}}
            English
        </a>
        <a class="dropdown-item" href="#">
            {{-- <img src="assets/images/china.png" alt="flag"> --}}
            Malay
        </a>
        <a class="dropdown-item" href="#">
            {{-- <img src="assets/images/uae.png" alt="flag"> --}}
            বাংলা
        </a>
    </div>
</div>
