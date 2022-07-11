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
                    <button class="btn rounded rounded-pill text-light" data-bs-toggle="modal"
                        data-bs-target="#addPet" style="background-color: #4381c1">
                        Post Pet<i class="bi bi-plus-circle-fill ms-2"></i>
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
                                                            <option {{ old('type') ? 'selected' : ''}} value="Dog">Dog</option>
                                                            <option {{ old('type') ? 'selected' : ''}} value="Bird">Bird</option>
                                                            <option {{ old('type') ? 'selected' : ''}} value="Fish">Fish</option>
                                                            <option {{ old('type') ? 'selected' : ''}} value="Cat">Cat</option>

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
                                                            <option {{ old('gender') ? 'selected' : ''}} value="Male">Male</option>
                                                            <option {{ old('gender') ? 'selected' : ''}} value="Female">Female</option>

                                                        </select>

                                                        @error('gender')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="age">Age</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="age" value="{{ old('age') }}" maxlength="10">

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
                                                            name="color" value="{{ old('color') }}" max="30">

                                                        @error('color')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="row mt-1">

                                                        <div class="col">
                                                            <div>
                                                                <label for="height">Height</label>
                                                                <input type="text" class="shadow-sm form-control"
                                                                    name="height" value="{{ old('height') }}" maxlength="10">

                                                                @error('height')
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div>
                                                                <label for="weight">Weight</label>
                                                                <input type="text" class="shadow-sm form-control"
                                                                    name="weight" value="{{ old('weight') }}" maxlength="10">

                                                                @error('weight')
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="breed">Breed</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="breed" value="{{ old('breed') }}" max="30">

                                                        @error('breed')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mt-1">
                                                        <label for="price">Price</label>
                                                        <input type="text" class="shadow-sm form-control"
                                                            name="price" placeholder="Pesos" onkeypress="return /[0-9]/i.test(event.key)"
                                                            maxlength="6" value="{{ old('price') }}">

                                                        @error('price')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn form-control text-light"
                                            style="background-color: #4381c1">
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
            <div class="pet">
                <table class="table text-center">
                    <thead id="applicantListHeader">
                        <tr>
                            <th class="fw-normal">Image</th>
                            <th class="fw-normal">Type</th>
                            <th class="fw-normal">Gender</th>
                            <th class="fw-normal">Age</th>
                            <th class="fw-normal">Color</th>
                            <th class="fw-normal">Height</th>
                            <th class="fw-normal">Weight</th>
                            <th class="fw-normal">Breed</th>
                            <th class="fw-normal">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pets as $pet)
                            <tr>
                                <td><img class="rounded" src="{{ asset('/storage/' . $pet->image) }}" alt="" width="50px" height="40px"></td>
                                <td>{{ $pet->type }}</td>
                                <td>{{ $pet->gender }}</td>
                                <td>{{ $pet->age }}</td>
                                <td>{{ $pet->color }}</td>
                                <td>{{ $pet->height }}</td>
                                <td>{{ $pet->weight }}</td>
                                <td>{{ $pet->breed }}</td>
                                <td>{{ $pet->price }}</td>
                                <td>
                                    <button class="btn btn-sm" style="background-color: #b9e28c"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn btn-sm" style="background-color: #ff5154"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                               <td>No pets displayed.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </x-layout>
    </section>
</x-navbar>
