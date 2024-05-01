<main>
    <!--########## Service Filter Options Start ##########-->
    <div class="dataTables_wrapper dt-bootstrap5">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                            aria-controls="example" class="form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label></div>
            </div>
            <!-- /.col -->

            <div class="col-sm-12 col-md-4">
                <div class="row">
                    <label for="name" class="col-sm-4 col-form-label d-flex text-capitalize justify-content-end">
                        loader
                    </label>
                    <div class="col-sm-8">

                        <input wire:model="search_text" type="search" class="form-control" id="name"
                            placeholder="Search...">

                        <!-- /.form-text -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--########## Service Filter Options End  ##########-->

    <!--########## Service List Start  ##########-->
    <div class="table-responsive mt-3">
        <table class="table table-hover table-sm mb-0 text-muted">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="20%">Name</th>
                    <th width="25%">Details </th>
                    <th width="7%">Status</th>
                    <th width="8%" class="text-center">Order</th>
                    <th width="20%">Last Modified</th>
                    <th width="15%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($models as $model)
                    <tr class="align-middle">
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $model['name'] }}
                        </td>
                        <td>
                            {{ $model['details'] }}
                        </td>
                        <td>
                            <div class="form-check form-switch form-check-success "
                                title="{{ $model['is_active'] == 1 ? 'Active' : 'Inactive' }}">
                                <input class="form-check-input" type="checkbox"
                                    @if ($model['is_active'] == 1) checked @endif disabled>
                            </div>
                        </td>
                        <td class="text-center">
                            {{ $model['order'] }}
                        </td>
                        <td>
                            {{ $model['created_on'] }}
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0)" class="badge bg-primary"
                                wire:click.prevent="show({{ $model->id }}, 'edit service', false)">
                                <i class="action_btn {{ $icons['edit'] }}"></i>
                            </a>

                            <a href="javascript:void(0)" class="badge bg-secondary"
                                wire:click.prevent="show({{ $model->id }})">
                                <i class="action_btn {{ $icons['view'] }}"></i>
                            </a>

                            <a href="javascript:void(0)" class="badge bg-danger"
                                wire:click.prevent="are_you_sure({{ $model->id }})">
                                <i class="action_btn {{ $icons['delete'] }}"></i>
                            </a>
                        </td>

                    </tr>
                @empty
                    <tr class="table-secondary">
                        <td colspan="7" class="text-center ">
                            No matching records found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <!-- /.table -->
    </div>
    <div class="d-flex align-items-center justify-content-end mt-3">

        {{ $models->links() }}
    </div>
    <!-- /.table-responsive -->

    <!--########## Service List End  ##########-->

    <!--########## Service Create Modal Start  ##########-->
    <div class="modal fade" id="modal_of_form" tabindex="-1" aria-labelledby="modal_form" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <form>

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title sentence_case" id="modal_of_form">{{ $modal_title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            title="Close"></button>
                    </div>
                    <!-- /.modal-header -->
                    <div class="modal-body">

                        <div class="row mb-3">
                            <label for="is_active" class="col-sm-3 col-form-label sentence_case">
                                {{ $labels['status'] }}
                            </label>
                            <div class="col-sm-9">

                                <div class="form-check form-switch form-check-success  mt-2">
                                    <input wire:model.defer="is_active" class="form-check-input" type="checkbox"
                                        role="switch" id="is_active" @if ($is_readonly) disabled @endif>
                                </div>

                                <!-- /.form-text -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label sentence_case">
                                {{ $labels['name'] }}
                            </label>
                            <div class="col-sm-9">

                                <input wire:model.defer="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    @if ($is_readonly) readonly @endif>

                                <label class="form-text sentence_case @error('name') error @enderror">
                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @else
                                        {{ $input_notes['name'] }}
                                    @endif
                                </label>

                                <!-- /.form-text -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row mb-3">
                            <label for="body" class="col-sm-3 col-form-label sentence_case">
                                {{ $labels['details'] }}
                            </label>
                            <div class="col-sm-9">
                                <textarea wire:model.defer="body" class="form-control @error('body') is-invalid @enderror" id="body"
                                    rows="3" @if ($is_readonly) readonly @endif></textarea>

                                <label class="form-text sentence_case @error('body') error @enderror">
                                    @if ($errors->has('body'))
                                        {{ $errors->first('body') }}
                                    @else
                                        {{ $input_notes['body'] }}
                                    @endif
                                </label>

                                <!-- /.form-text -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row mb-3">
                            <label for="order" class="col-sm-3 col-form-label sentence_case">
                                {{ $labels['order'] }}
                            </label>
                            <div class="col-sm-9">

                                <input wire:model.defer="order" type="number"
                                    class="form-control @error('order') is-invalid @enderror" id="order"
                                    min="1" max="100" @if ($is_readonly) readonly @endif>

                                <label class="form-text sentence_case @error('order') error @enderror">
                                    @if ($errors->has('order'))
                                        {{ $errors->first('order') }}
                                    @else
                                        {{ $input_notes['order'] }}
                                    @endif
                                </label>

                                <!-- /.form-text -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                    </div>
                    <!-- /.modal-body -->
                    @if (!$is_readonly)
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger px-4 sentence_case"
                                wire:click.prevent="resets">
                                <i class="action_btn  {{ $icons['reset'] }}"></i>
                                {{ $labels['reset'] }}

                            </button>
                            <button type="button" class="btn btn-primary sentence_case"
                                wire:click.prevent="{{ $current_action_method }}">
                                <i class="action_btn {{ $icons['save'] }}"></i>
                                {{ $labels['save'] }}
                            </button>
                        </div>
                        <!-- /.modal-footer -->
                    @endif
                </div>
                <!-- /.modal-content -->
            </form>
            <!-- /form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--########## Service Create Modal End  ##########-->

</main>
