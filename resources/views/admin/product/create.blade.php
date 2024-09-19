
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div>
                    {{session('error')}}
                </div>
            @endif

            <div class="p-6 text-gray-900">
                <div class="div_deg">
                    <form action="{{route('admin/product/save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- images input --}}
                        {{-- <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="images" class="form-control" placeholder="Image">
                                @error('images')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="variant" class="form-control" placeholder="Variant">
                            </div>
                            @error('variant')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="description" class="form-control" placeholder="Description">
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

