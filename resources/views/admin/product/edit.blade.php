<!-- Modal -->
<div class="container">
    <div class="modal-overlay">
                <div class="modal-content w-100" style="background-color: #2d3035">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Sign in</h5>
                            <a href="{{route('admin/user/table')}}" style="text-decoration:none; color:aliceblue;"><button type="button"  class="btn btn-close" data-mdb-dismiss="modal" aria-label="Close" style="background-color:#626568">X</button></a>
                        </div>
                    <div class="modal-body p-4">
                        <form action="{{route('admin/user/table/update', $users->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="email1" name="name" class="form-control" value="{{$users->name}}"/>
                                <label class="form-label" for="email1">Name</label>
                            </div>

                            <!-- Username input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="email1" name="username" class="form-control" value="{{$users->username}}"/>
                                <label class="form-label" for="email1">Username</label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="email1" class="form-control" value="{{$users->email}}"/>
                                <label class="form-label" for="email1">Email</label>
                            </div>

                            <!-- Phone input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" name="phone" id="email1" class="form-control" value="{{$users->phone}}"/>
                                <label class="form-label" for="email1">Phone</label>
                            </div>

                            <!-- Address input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="address" id="email1" class="form-control" value="{{$users->address}}"/>
                                <label class="form-label" for="email1">address</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-warning btn-block">Update</button>
                        </form>
                    </div>
                </div>
    <!-- Modal -->

</div>
