<x-navbar>
    <x-layout>
        <div class="container-fluid d-flex mb-2">
            <div class="d-flex">
                <div class="me-2 h5">Types</div>
                <div>
                    <a href="/home" type="submit" class="badge bg-primary text-decoration-none" name="type">
                        <i class="fa-solid fa-globe me-2"></i>All
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?filter=dog" type="submit" class="badge bg-secondary text-decoration-none" name="type">
                        <i class="fa-solid fa-dog me-2"></i>Dog
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?filter=cat" type="submit" class="badge bg-info text-decoration-none" name="type">
                        <i class="fa-solid fa-cat me-2"></i>Cat
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?filter=fish" type="submit" class="badge bg-warning text-decoration-none" name="type">
                        <i class="fa-solid fa-fish-fins me-2"></i>Fish
                    </a>
                </div>
                <div class="ms-1">
                    <a href="?filter=bird" type="submit" class="badge bg-success text-decoration-none" name="type">
                        <i class="fa-solid fa-dove me-2"></i>Bird
                    </a>
                </div>

            </div>
            <form action="" class="ms-auto">
                <div class="input-group">
                    <div class="shadow-sm form-outline">
                        <input type="search" id="form1" class="form-control" name="filter" placeholder="Search"/>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="card border-end-0 border-start-0 border-bottom-0">
            <div class="card-body">
                {{-- Array chunk was used to filter how many card in a row, much like pagination --}}
                @forelse (array_chunk($pet->toArray(), 4) as $set)
                    <div class="row d-flex justify-content-around">
                        @foreach ($set as $pet)
                            <div class="col-3 card shadow rounded rounded-3 mt-4" style="width: 15rem; height: 19rem">
                                <img class="card-img-top w-100 mt-2 border" src="{{ asset('/storage/' . $pet['image']) }}"
                                alt="Image of {{ $pet['type'] }}" style="min-height: 150px;">
                                <div class="card-body p-0 mt-1">
                                    <p class="card-text m-0 p-0 text-muted">
                                        <i class="fa-solid fa-paw me-1"></i><strong>Type:</strong>
                                        {{ $pet['type'] }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="fa-solid fa-heart me-1"></i><strong>Breed:</strong>
                                        {{ $pet['breed'] }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="fa-solid fa-mars-and-venus me-1"></i><strong>Gender:</strong>
                                        {{ $pet['gender'] }}
                                    </p>
                                    <p class="card-text m-0 p-0  text-muted">
                                        <i class="bi bi-tags-fill me-1"></i><strong>Price:</strong>
                                        {{ '₱ '. $pet['price']}}
                                    </p>
                                </div>
                                <div class="card-bottom d-flex justify-content-center">
                                    <a href="/pets/{{ $pet['id'] }}" target="_blank" class="text-decoration-none mb-3 mt-1" style="font-size: 14px">
                                        View more details<i class="bi bi-arrow-right-circle-fill ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @empty
                    <div class="h5 d-flex justify-content-center">No pets availabe at this time.</div>
                @endforelse

            </div>
        </div>
    </x-layout>
</x-navbar>
