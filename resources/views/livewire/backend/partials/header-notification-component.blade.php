<li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown">
        <span class="alert-count">
            {{ $unread_log_counter }}
        </span>
        <i class="{{ $log_counter_icon }}"></i>
    </a>
    <!-- /.nav-link -->
    <div class="dropdown-menu dropdown-menu-end">
        <a href="javascript:void(0)">
            <div class="msg-header">
                <p class="msg-header-title sentence_case">
                    {{ $item_title }}
                </p>
                <p class="msg-header-badge sentence_case">
                    {{ $mark_all_as_read_text }}
                </p>
            </div>
            <!-- /.msg-header -->
        </a>
        <!-- /.a -->
        <div class="header-message-list ps">
            @foreach ($activity_log['data'] as $key => $log)
            <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                    <div class="notify {{ $log['icon_class'] }}">
                        <i class="{{ $log['icon'] }}"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="msg-name sentence_case">
                            {{ $log['subject'] }}
                            <span class="msg-time float-end">{{ $log['when'] }}</span>
                        </h6>
                        <p class="msg-info sentence_case"> {!! $log['details'] !!}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <!-- /.header-message-list -->
        <a href="javascript:void(0)">
            <div class="text-center msg-footer">
                <button class="btn btn-primary w-100 sentence_case">
                    {{ $view_all_text }}
                </button>
            </div>
        </a>
        <!-- /a -->
    </div>
    <!-- /.dropdown-menu -->
</li>
<!-- /.nav-item  -->