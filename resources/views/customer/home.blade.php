<x-navbar>
    <x-layout>
        <div class="container-fluid d-flex mb-2">
            <div class="d-flex">
                <div class="me-2 h5">Types</div>
                <div>
                    <a href="/home" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-globe me-2"></i>All
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?type=dog" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-dog me-2"></i>Dog
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?type=cat" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-cat me-2"></i>Cat
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?type=fish" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-fish-fins me-2"></i>Fish
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?type=bird" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-dove me-2"></i>Bird
                    </a>
                </div>

            </div>
            <div class="input-group">
                <div class="form-outline ms-auto">
                    <input type="search" id="form1" class="form-control" placeholder="Search"/>
                </div>

                <div>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="card border-end-0 border-start-0 border-bottom-0">
            <div class="card-body">
                @forelse (array_chunk($pet->toArray(), 4) as $set)
                    <div class="row d-flex justify-content-around">
                        @foreach ($set as $pet)
                            <div class="col-3 card shadow rounded rounded-2 mt-3" style="width: 15rem; height: 19rem">
                                <img class="card-img-top w-100 mt-2 border" src="{{ asset('/storage/' . $pet->image) }}"
                                alt="Image of {{ $pet->type }}" style="min-height: 150px;">
                                <div class="card-body p-0 mt-1">
                                    <p class="card-text m-0 p-0 text-muted">
                                        <i class="fa-solid fa-paw me-1"></i><strong>Type:</strong>
                                        {{ $pet->type }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="fa-solid fa-heart me-1"></i><strong>Breed:</strong>
                                        {{ $pet->breed }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="fa-solid fa-mars-and-venus me-1"></i><strong>Gender:</strong>
                                        {{ $pet->gender }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="bi bi-tags-fill me-1"></i><strong>Price:</strong>
                                        {{ '₱ '. $pet->price}}
                                    </p>
                                </div>
                                <div class="card-bottom d-flex justify-content-center">
                                    <a href="/pets/{{ $pet->id }}" class="text-decoration-none mb-3 mt-1" style="font-size: 14px">
                                        View more details<i class="bi bi-arrow-right-circle-fill ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @empty
                    <div class="h2">No pets availabe at this time.</div>
                @endforelse

            </div>
        </div>
    </x-layout>
</x-navbar>
