<x-backend.layout.master>
    <x-slot:meta_title>{{ __("Home Basic Information's") }}</x-slot>

        <x-backend.addons.card-component>
            <x-slot:card_title>{{ __("General Information's") }}</x-slot>
                <livewire:backend.home.home-general-info-component :setting="$settings" />
        </x-backend.addons.card-component>
        <!-- /General Informations -->


        <x-backend.addons.card-component>
            <x-slot:card_title>{{ __('Professional Skills') }}</x-slot>
                <livewire:backend.home.home-professional-skills-component :setting="$settings" />
        </x-backend.addons.card-component>
        <!-- /Professional Skills -->

        @push('dynamic_js')
        <script type="module">
            /* Edit modal show */

            window.addEventListener('show_modal', function() {
                const modal_of_form = new bootstrap.Modal(document.getElementById('modal_of_form'));
                modal_of_form.show();
            })

            /* Toast notification after success */
            window.addEventListener('toast_alert', event => {
                event.preventDefault();
                Toast.fire({
                    icon: event.detail.type,
                    title: event.detail.message,
                });
            })

            /* Notify a confirmation alert before proceed */
            window.addEventListener('are_you_sure', event => {
                const {
                    component,
                    message,
                } = event.detail;
                event.preventDefault();
                Swal.fire({
                    title: message,
                    text: "You can not revert this operation later!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emitTo(component, 'confirmed_event');
                    }
                })
            })
        </script>
        @endpush

</x-backend.layout.master>