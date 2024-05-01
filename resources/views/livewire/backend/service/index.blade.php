<x-backend.layout.master>
    <x-slot:meta_title>{{ $meta_title }}</x-slot>

        <x-backend.addons.card-component has-buttons="1">
            <x-slot:card_title>{{ $meta_title }}</x-slot>
                <livewire:backend.service.service-component />

        </x-backend.addons.card-component>
        <!-- /Card component -->

        @push('dynamic_js')
        <script type="module">
            let modal_of_form = document.getElementById('modal_of_form');

            /**
             * Reset component value to initials
             * @return null
             */
            modal_of_form.addEventListener('hidden.bs.modal', event => {
                window.livewire.emitTo('backend.service.service-component', 'reset_component_event');
            })

            /**
             * Livewire show_modal event to display modal window
             * @return null
             */
            window.addEventListener('show_modal', function() {
                let modal_object = new bootstrap.Modal(modal_of_form);
                modal_object.show();
            })
        </script>
        @endpush



</x-backend.layout.master>