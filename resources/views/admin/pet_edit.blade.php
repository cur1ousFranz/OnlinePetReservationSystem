<x-navbar>
    <section>
        <x-layout class="d-flex justify-content-center">

            <div class="card shadow">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    <div class="h4 d-flex justify-content-center mb-5">
                        <i class="fa-solid fa-paw me-2"></i>Edit Pet Details
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center justify-content-sm-center">
                                <img class="img-fluid rounded rounded-2 border"
                                src="{{ asset('/storage/' . $pet->image) }}" alt="Image of {{ $pet->breed }}"
                                width="250px" style="height: 250px;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <form action="/pets/{{ $pet->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="container float-start">
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col">

                                                <div>
                                                    <label for="image" class="text-muted">Upload New Image</label>
                                                    <input class="form-control shadow-sm" type="file"
                                                        name="image">

                                                    @error('image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="mt-1">
                                                    <label for="type" class="text-muted">Type</label>
                                                    <select class="shadow-sm form-select form-control"
                                                        name="type">
                                                        <option selected disabled>Select</option>
                                                        <option {{ $pet->type == "Dog" ? 'selected' : ''}} value="Dog">Dog</option>
                                                        <option {{ $pet->type == "Bird" ? 'selected' : ''}} value="Bird">Bird</option>
                                                        <option {{ $pet->type == "Fish" ? 'selected' : ''}} value="Fish">Fish</option>
                                                        <option {{ $pet->type == "Cat" ? 'selected' : ''}} value="Cat">Cat</option>

                                                    </select>

                                                    @error('type')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="mt-1">
                                                    <label for="gender" class="text-muted">Gender</label>
                                                    <select class="shadow-sm form-select form-control"
                                                        name="gender">
                                                        <option selected disabled>Select</option>
                                                        <option {{ $pet->gender == "Male" ? 'selected' : ''}} value="Male">Male</option>
                                                        <option {{ $pet->gender == "Female" ? 'selected' : ''}} value="Female">Female</option>

                                                    </select>

                                                    @error('gender')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="mt-1">
                                                    <label for="age" class="text-muted">Age</label>
                                                    <input type="text" class="shadow-sm form-control"
                                                        name="age" value="{{ $pet->age }}" maxlength="10">

                                                    @error('age')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                            </div>

                                            {{-- Next Column --}}
                                            <div class="col">
                                                <div>
                                                    <label for="color" class="text-muted">Color</label>
                                                    <input type="text" class="shadow-sm form-control"
                                                        name="color" value="{{ $pet->color }}" max="30">

                                                    @error('color')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="row mt-1">

                                                    <div class="col">
                                                        <div>
                                                            <label for="height" class="text-muted">Height</label>
                                                            <input type="text" class="shadow-sm form-control"
                                                                name="height" value="{{ $pet->height }}" maxlength="10">

                                                            @error('height')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div>
                                                            <label for="weight" class="text-muted">Weight</label>
                                                            <input type="text" class="shadow-sm form-control"
                                                                name="weight" value="{{ $pet->weight }}" maxlength="10">

                                                            @error('weight')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mt-1">
                                                    <label for="breed" class="text-muted">Breed</label>
                                                    <input type="text" class="shadow-sm form-control"
                                                        name="breed" value="{{ $pet->breed }}" max="30">

                                                    @error('breed')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="mt-1">
                                                    <label for="price" class="text-muted">Price</label>
                                                    <input type="text" class="shadow-sm form-control"
                                                        name="price" placeholder="Pesos" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="6" value="{{ $pet->price }}">

                                                    @error('price')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/pets" class="btn btn-secondary mt-5 me-2">Go back</a>
                                        <button type="submit" class="btn text-light mt-5"
                                        style="background-color: #4381c1"
                                        ng-disabled="myForm.$pristine" ng-click="myForm.$setPristine()">
                                            Update
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-layout>
    </section>
</x-navbar>
