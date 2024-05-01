<x-backend.layout.master>
    <x-slot:meta_title>Conversation List</x-slot>
        <div class="chat-wrapper">
            <div class="chat-sidebar">
                <livewire:backend.chat.chat-sidebar-header />
                <!-- chat-sidebar-header -->
                <div class="chat-sidebar-content">
                    <livewire:backend.chat.chat-list />
                    <!-- chat-list -->
                </div>
                <!-- /.chat-sidebar-content -->
            </div>
            <!-- /.chat-sidebar -->
            <livewire:backend.chat.chat-header />
            <!-- chat-header -->
            <livewire:backend.chat.chat-content />
            <!-- chat-content -->
            <livewire:backend.chat.chat-footer />
            <!-- chat-footer -->
            <div class="overlay chat-toggle-btn-mobile"></div>
            <!--end chat overlay-->
        </div>
        <!-- /.chat-wrapper -->
        @push('dynamic_js')
        <script type="module">
            new PerfectScrollbar('.chat-list');
            new PerfectScrollbar('.chat-content');
        </script>
        @endpush
</x-backend.layout.master>