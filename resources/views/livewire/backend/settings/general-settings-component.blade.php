<x-backend.components.card-component card-title="meta information" card-icon="tag">
    <form class="row g-3 needs-validation" wire:submit.prevent="">

        <div class="row mb-3 mt-3">
            <label for="meta_title" class="col-sm-12 col-md-3 col-lg-3 col-form-label text-capitalize">meta
                title: </label>
            <!-- /.col -->
            <div class="col-sm-8 col-md-6 col-lg-7">
                <input wire:model.lazy="meta_title" type="text"
                    class="form-control @error('meta_title') is-invalid @enderror" id="meta_title">

                <div class="sentence_case form-text @error('meta_title') invalid-feedback @enderror">
                    @if ($errors->has('meta_title'))
                        {{ $errors->first('meta_title') }}
                    @else
                        notice: meta title can not be empty, max length 100
                    @endif
                </div>

            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-3 col-lg-2">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button wire:click.prevent="update_or_create('meta_title')" type="button"
                        class="btn btn-outline-secondary">
                        <i class="{{ _icons('save2') }}  font-22"></i>
                    </button>
                    <button wire:click.prevent="clear_single_value('meta_title')" type="button"
                        class="btn btn-outline-secondary">
                        <i class="{{ _icons('bin') }} font-22"></i>
                    </button>
                    <button wire:click.prevent="get_single_initial_value('meta_title')" type="button"
                        class="btn btn-outline-secondary">
                        <i class="{{ _icons('reboot') }} font-22"></i>
                    </button>
                </div>
                <!-- /.btn-group -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </form>
    <!-- /form -->
</x-backend.components.card-component>
