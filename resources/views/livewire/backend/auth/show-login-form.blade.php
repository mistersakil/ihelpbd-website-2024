<div class="fragment">
    <div class="card">
        <div class="card-body">
            <div class="border p-4 rounded">
                <div class="text-center">
                    <h3 class="text-muted">Admin Login</h3>
                </div>
                <div class="form-body">
                    <form class="row g-3 needs-validation" autocomplete="off" wire:submit.prevent="login_process">
                        <div class="col-12">
                            <label for="email" class="form-label">
                                {{ __('Email Address') }}
                            </label>

                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="bx bxs-envelope"></i>
                                </div>
                                <input wire:model.lazy="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="{{ __('Enter your email address') }}">

                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                            <label for="password" class="form-label">
                                {{ __('Enter Password') }}
                            </label>
                            <div class="input-group" id="show_hide_password">
                                <div class="input-group-text toggle" title="Show or hide password">
                                    <i class='bx bx-hide'></i>
                                </div>
                                <input wire:model.lazy="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    value="12345678" placeholder="{{ __('Enter your password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                    id="remember_me" @if($remember_me) checked @endif />
                                <label class="form-check-label" for="remember_me">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bxs-lock-open"></i>
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <!-- /.col -->


                    </form>
                    <!-- /.row -->
                </div>
                <!-- /.border -->
            </div>
            <!-- /.border -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.card -->



</div>