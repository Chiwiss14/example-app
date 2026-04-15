<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Restaurant</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.restaurant.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>

                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter restaurant name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>

                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter restaurant address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>

                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter restaurant phone">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>

                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <button btn type="submit">Add Restaurant </button>  


</x-app-layout>
