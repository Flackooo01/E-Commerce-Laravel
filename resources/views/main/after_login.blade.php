@include('partials.main_header_afterlogin')

    {{-- Navbar Component --}}
    @include('components.main_components.navbar')

    {{-- Welcom Text And image --}}
    @include('components.main_components.hero')

    {{-- feature --}}
    @include('components.main_components.feature')

    {{-- Feature Product --}}
    @include('components.main_components.feature_product')

    {{-- Explore Product --}}
    @include('components.main_components.explore_product')

    {{-- Footer --}}
    @include('components.main_components.footer')

        <!-- Featured Categories -->
        <!-- <div class="featured-text">
            <h1>Featured Product</h1>
        </div>

        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="images/Features Product/Headset.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/Features Product/Keyboard.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/Features Product/Microphone.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/Features Product/Headset.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/Features Product/PS Controller.jpg">
                    </div>
            </div>
            </div>
        </div> -->
        {{-- javascript --}}
        @include('components.main_components.javascript')

@include('partials.footer')
