
<div class="container">
    <div class="block" style="align-content:flex-start">
        <h1>All Registered User</h1>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif

        <table id="example" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $item)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="{{route('admin/user/table/edit', ['id'=>$item->id])}}" type="button" class="btn btn-warning">Edit</a>
                        <a href="" type="button" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Product not found</td>
                </tr>
                @endforelse
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>


    {{-- <!-- Modal -->
    <div class="modal-overlay" >
        <div class="modal fade" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true"">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content w-100">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Sign in</h5>
                        <button  type="button"  class="btn btn-close" data-mdb-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="{{route('admin/user/table/update', $item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="email1" name="name" class="form-control" value="{{$item->name}}"/>
                                <label class="form-label" for="email1">Name</label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="email1" class="form-control" value="{{$item->email}}"/>
                                <label class="form-label" for="email1">Email</label>
                            </div>

                            <!-- Phone input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="phone" id="email1" class="form-control" value="{{$item->phone}}"/>
                                <label class="form-label" for="email1">Phone</label>
                            </div>

                            <!-- Address input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="address" id="email1" class="form-control" value="{{$item->address}}"/>
                                <label class="form-label" for="email1">address</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-warning btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal --> --}}
    </div>

</div>


