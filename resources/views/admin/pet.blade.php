<x-navbar>
    <section>
        <x-layout>
            <div class="container-fluid mb-2 d-flex">
                <div class="h5">Types</div>
                <div class="ms-3">
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                    <a href="#" class="badge bg-secondary btn text-light text-decoration-none">New</a>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-primary rounded rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#addPet">
                        <i class="bi bi-plus-circle-fill me-2"></i>Post Pet
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addPet">
                        <div class="modal-dialog modal-lg modal-dialog-centered">


                            <div class="modal-content border border-1 border-dark">
                                <div class="modal-header d-flex justify-content-center">
                                    <div class="h4 modal-title">Post Pet</div>
                                </div>
                                <form action="/pets/store" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="container">
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col">

                                                    <div>
                                                        <label for="image">Image</label>
                                                        <input class="form-control shadow-sm" type="file"
                                                            name="image">

                                                        @error('image')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="type">Type</label>
                                                        <select class="shadow-sm form-select form-control"
                                                            name="type">
                                                            <option selected disabled>Select</option>
                                                            <option value="Dog">Dog</option>
                                                            <option value="Bird">Bird</option>
                                                            <option value="Fish">Fish</option>
                                                            <option value="Cat">Cat</option>

                                                        </select>

                                                        @error('type')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="gender">Gender</label>
                                                        <select class="shadow-sm form-select form-control"
                                                            name="gender">
                                                            <option selected disabled>Select</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>

                                                        </select>

                                                        @error('gender')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="age">Age</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="age">

                                                        @error('age')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>

                                                {{-- Next Column --}}
                                                <div class="col">
                                                    <div>
                                                        <label for="color">Color</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="color">

                                                        @error('color')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="height">Height</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="height">

                                                        @error('height')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="weight">Weight</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="weight">

                                                        @error('weight')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="breed">Breed</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="breed">

                                                        @error('breed')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary form-control">
                                                Post
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th class="fw-normal">Image</th>
                        <th class="fw-normal">Type</th>
                        <th class="fw-normal">Gender</th>
                        <th class="fw-normal">Age</th>
                        <th class="fw-normal">Behaviour</th>
                        <th class="fw-normal">Color</th>
                        <th class="fw-normal">Height</th>
                        <th class="fw-normal">Weight</th>
                        <th class="fw-normal">Breed</th>
                        <th class="fw-normal">Parents Breed</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </x-layout>
    </section>
</x-navbar>
