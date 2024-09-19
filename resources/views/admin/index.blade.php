@include('admin.partials.admin_header')

{{-- header --}}
@include('admin.admin_components.admin_header')

{{-- Main --}}
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
        @include('admin.admin_components.admin_navbar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        {{-- dashboard Text --}}
        @include('admin.admin_components.admin_dashboard_text')

            {{-- body --}}
            @include('admin.admin_components.admin_body')

            {{-- Footer --}}
            @include('admin.admin_components.admin_footer')
    </div>
</div>
        <!-- JavaScript files-->
        @include('admin.admin_components.admin_javascript')

@include('admin.partials.admin_footer')
