<form class="row g-3 needs-validation" wire:submit.prevent="">

    @foreach ($inputs as $key => $single_input)
        <div class="row mb-3" wire:key="{{ 'input_item_' . $key }}">
            <label for="{{ $key }}" class="col-sm-3 col-form-label sentence_case">
                {{ $single_input['label'] }}
            </label>
            <div class="col-sm-9">
                <div class="input-group ">
                    <span class="input-group-text">
                        <i class=" {{ $single_input['icon'] }}"></i>
                    </span>
                    <input wire:model.lazy="{{ 'state.' . $key }}" type="text"
                        class="form-control @error('state.' . $key) is-invalid @enderror" id="{{ $key }}">
                </div>
                <!-- /.input-group -->

                <div class="form-text sentence_case">
                    @if ($errors->has('state.' . $key))
                        {{ $errors->first('state.' . $key) }}
                    @else
                        {{ $single_input['help_text'] }}
                    @endif
                </div>
                <!-- /.form-text -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    @endforeach

    <div class="col-md-12">
        <div class="d-flex align-items-center justify-content-start justify-content-sm-end gap-3">
            <button type="button" class="btn btn-light px-4" wire:click="reset_general_info_form">
                <i class="action_btn {{ $icon_reset }}"></i>
                Reset
            </button>
            <button type="submit" class="btn btn-primary px-4" wire:click.prevent="are_you_sure">
                <i class="action_btn {{ $icon_save }}"></i>
                Save
            </button>
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.col -->
</form>
