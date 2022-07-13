<x-navbar>
    <section>
        <x-layout>
            <div class="container-fluid mb-2 d-flex">
                <div class="h4">Pets</div>
                <div class="ms-3 mt-1">
                    <a href="/pets" class="text-decoration-none me-1">All <span class="text-dark">|</span></a>
                    <a href="?filter=available" class="text-decoration-none me-1">Available <span class="text-dark">|</span></a>
                    <a href="?filter=reserved" class="text-decoration-none me-1">Reserved <span class="text-dark">|</span></a>
                    <a href="?filter=dog" class="text-decoration-none me-1">Dog <span class="text-dark">|</span></a>
                    <a href="?filter=bird" class="text-decoration-none me-1">Bird <span class="text-dark">|</span></a>
                    <a href="?filter=fish" class="text-decoration-none me-1">Fish <span class="text-dark">|</span></a>
                    <a href="?filter=cat" class="text-decoration-none me-1">Cat <span class="text-dark">|</span></a>
                </div>
                <div class="ms-auto">
                    <button class="btn rounded rounded-pill text-light" data-bs-toggle="modal" data-bs-target="#addPet"
                        style="background-color: #4381c1">
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
                                                            <option {{ old('type') === 'Dog' ? 'selected' : '' }}
                                                                value="Dog">Dog</option>
                                                            <option {{ old('type') === 'Bird' ? 'selected' : '' }}
                                                                value="Bird">Bird</option>
                                                            <option {{ old('type') === 'Fish' ? 'selected' : '' }}
                                                                value="Fish">Fish</option>
                                                            <option {{ old('type') === 'Cat' ? 'selected' : '' }}
                                                                value="Cat">Cat</option>

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
                                                            <option {{ old('gender') === 'Male' ? 'selected' : '' }}
                                                                value="Male">Male</option>
                                                            <option {{ old('gender') === 'Female' ? 'selected' : '' }}
                                                                value="Female">Female</option>

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
                                                                    name="height" value="{{ old('height') }}"
                                                                    maxlength="10">

                                                                @error('height')
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div>
                                                                <label for="weight">Weight</label>
                                                                <input type="text" class="shadow-sm form-control"
                                                                    name="weight" value="{{ old('weight') }}"
                                                                    maxlength="10">

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
                                                            name="price" placeholder="Pesos"
                                                            onkeypress="return /[0-9]/i.test(event.key)"
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
                            <th class="fw-normal">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pets as $pet)
                            <tr>
                                <td><img class="rounded" src="{{ asset('/storage/' . $pet->image) }}"
                                        alt="Image of {{ $pet->type }}" width="50px" height="40px"></td>
                                <td>{{ $pet->type }}</td>
                                <td>{{ $pet->gender }}</td>
                                <td>{{ $pet->age }} </td>
                                <td>{{ $pet->color }}</td>
                                <td>{{ $pet->height }}</td>
                                <td>{{ $pet->weight }}</td>
                                <td>{{ $pet->breed }}</td>
                                <td>{{ $pet->price }}</td>
                                <td style="color: #329f5b">{{ $pet->reserve }}</td>
                                <td class="d-flex">
                                    <a href="/pets/{{ $pet->id }}/edit" class="btn btn-sm me-1"
                                        style="background-color: #b9e28c">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <a href="/pets/{{ $pet->id }}/destroy" class="btn btn-sm"
                                        style="background-color: #ff5154"">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>

                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="10">No pets displayed.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
                {{-- PAGINATION --}}
                <div class="container mt-3">
                    {{ $pets->links('pagination::bootstrap-5') }}
                </div>
            </div>

            {{-- Delete Pet Confirmation Modal --}}
            {{-- <form action="" method="post">
                @csrf
                @method('DELETE')
            <div class="modal fade" id="petDeleteModal{{ $pet->id }}">
                <div class="modal-dialog modal-dialog-centered text-center">
                    <div class="modal-content border border-danger" role="document">
                        <div class="modal-header d-flex justify-content-center">
                            <h4 class="modal-title">Delete Pet</h4>
                        </div>

                            <div class="modal-body">
                                <h5>Are you sure you want to delete this Pet? {{ $pet->id }}</h5>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-danger"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-outline-primary">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </form> --}}

        </x-layout>
    </section>
</x-navbar>
