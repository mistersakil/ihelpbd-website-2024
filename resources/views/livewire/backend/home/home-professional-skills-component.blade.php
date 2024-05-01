<div>
    <form class="row g-3 needs-validation" wire:submit.prevent="">
        <div class="card shadow-none border radius-15">
            <div class="card-body">
                @isset($state)
                @foreach ($state as $key => $single_input)
                <div class="row mb-3" wire:key="{{ 'skill_item_' . $key }}">
                    <label for="{{ 'skill_item_for' . $key }}" class="col-sm-3 col-form-label sentence_case">
                        Skill Name
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group ">
                            <span class="input-group-text">
                                <i class="{{ $icons['skill'] }}"></i>
                            </span>
                            <input wire:model="{{ 'state.' . $key . '.skill' }}" type="text" class="form-control @error('state.' . $key . '.skill') is-invalid @enderror" id="{{ 'skill_item_for' . $key }}">
                            @if ($key != 0)
                            <span class="input-group-text">
                                <a href="javascript:void(0)" class="badge bg-secondary" title="{{ __('Remove row') }}" wire:click="remove_skill_row({{ $key }})">
                                    <i class="{{ $icons['remove'] }} @if ($key != 0) text-light @endif"></i>
                                </a>
                            </span>
                            @endif
                        </div>
                        <!-- /.input-group -->

                        <div class="form-text sentence_case">
                            @if ($errors->has('state.' . $key . '.skill'))
                            {{ $errors->first('state.' . $key . '.skill') }}
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
                @endisset

                <div class="col-md-12 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-start justify-content-sm-end gap-3">
                        <button type="button" class="btn btn-light px-4" wire:click="add_new_skill_row">
                            <i class="action_btn {{ $icons['add'] }}"></i>
                            New Row
                        </button>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex align-items-center justify-content-start justify-content-sm-end gap-3">
                        <button type="button" class="btn btn-light px-4" wire:click="reset_general_info_form">
                            <i class="action_btn {{ $icons['reset'] }}"></i>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary px-4" wire:click.prevent="are_you_sure('save')">
                            <i class="action_btn {{ $icons['save'] }}"></i>
                            Save
                        </button>
                    </div>
                    <!-- /.d-flex -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </form>

    <!-- ########## Professional Skill List ########## -->

    @if (isset($skill_list) && count($skill_list))
    <div class="card shadow-none border radius-15">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0 text-muted">Skill List</h6>
                </div>
                <div class="ms-auto">
                    <a wire:click.prevent="are_you_sure('delete',0)" href="javascript:void(0)" class="btn btn-sm btn-outline-secondary">
                        <i class="action_btn {{ $icons['delete_all'] }}"></i>
                        Delete all
                    </a>
                </div>
            </div>
            <!-- /.d-flex -->
            <div class="table-responsive mt-3">
                <table class="table table-hover table-sm mb-0 text-muted">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Name </th>
                            <th>Created At</th>
                            <th>Last Modified</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill_list as $item)
                        <tr class="align-middle">
                            <td width="15%">
                                <a class="btn btn-sm btn-outline-danger" href="javascript:void(0)" wire:click.prevent="are_you_sure('delete',{{ $item['id'] }})">
                                    <i class="action_btn {{ $icons['delete'] }}"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary" href="javascript:void(0)" wire:click.prevent="edit({{ $item['id'] }})">
                                    <i class="action_btn {{ $icons['edit'] }}"></i>
                                </a>
                            </td>
                            <td width="35%">
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold">{{ $item['name'] }}</div>
                                </div>
                            </td>
                            <td width="25%">
                                {{ $item['created'] }}
                            </td>
                            <td width="25%">
                                {{ $item['updated'] }}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /.table -->
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @endif
    <!--########## End: Professional Skill List ##########-->


    <!--########## Professional Skill Edit Modal ##########-->

    <div class="modal fade" id="modal_of_form" tabindex="-2" aria-hidden="true" wire:ignore.self>

        <div class="modal-dialog modal-md">
            <form wire:submit.prevent="update">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-muted">Edit Professional Skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- /.modal-header -->
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="edit_skill" class="col-sm-12 col-form-label sentence_case">
                                Skill Name
                            </label>
                            <div class="col-sm-12">
                                <div class="input-group ">
                                    <span class="input-group-text">
                                        <i class="bi bi-mortarboard"></i>
                                    </span>
                                    <input wire:model.defer="single_skill.skill" type="text" class="form-control @error('skill') is-invalid @enderror" id="edit_skill">
                                </div>
                                <!-- /.input-group -->


                                <div class="form-text sentence_case">
                                    @if ($errors->has('skill'))
                                    {{ $errors->first('skill') }}
                                    @else
                                    Waerning
                                    @endif
                                </div>
                                <!-- /.form-text -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-light">Reset</button>
                            <button type="submit" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--########## Professional Skill Edit Modal ##########-->

</div>