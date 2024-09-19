
<div class="text-box">
    <h1>Welcome To Gaming Accessories</h1>
    <div class="background">
        <img src="  images/Background/Background.jpg" id="slideImg">
    </div>
</div>

{{-- <!-- Add the JavaScript in a separate section or file -->
@section('scripts')
<script>
    // Image Slider
    let slideImg = document.getElementById("slideImg");

    let images = [
        "{{ asset('images/Background/Background.jpg') }}",
        "{{ asset('images/Background/Backgroud2.jpg') }}",
        "{{ asset('images/Background/Backgroud3.jpg') }}",
        "{{ asset('images/Background/Backgroud4.jpg') }}"
    ];
    let len = images.length;
    let i = 0;

    function slider() {
        if (i >= len) {
            i = 0;
        }
        slideImg.src = images[i];
        i++;
        setTimeout(slider, 3000);
    }

    // Start the slider function when the page loads

</script>
@endsection --}}


