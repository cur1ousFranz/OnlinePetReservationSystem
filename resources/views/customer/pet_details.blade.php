<x-navbar>
    <section>
        <x-layout class="d-flex justify-content-center">
            <div class="card w-75 shadow-sm">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    <span class="badge bg-success">New</span>
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid rounded rounded-3 border shadow w-50 h-auto"
                            src="{{ asset('/storage/' . $pet->image) }}" alt="">
                    </div>
                    <div class="container">
                        <hr>
                    </div>
                    <div>
                        <div class="container w-75 mt-2">
                            <div class="row ms-5">
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Type:</b> {{ $pet->type }}</div>
                                </div>
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Age:</b> {{ $pet->age }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="container w-75 mt-2">
                            <div class="row ms-5">
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Breed:</b> {{ $pet->breed }}</div>
                                </div>
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Color:</b> {{ $pet->color }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="container w-75 mt-2">
                            <div class="row ms-5">
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Gender:</b> {{ $pet->gender }}</div>
                                </div>
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Height:</b> {{ $pet->height }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="container w-75 mt-2">
                            <div class="row ms-5">
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Price:</b> {{ $pet->price }}</div>
                                </div>
                                <div class="col-md mt-2 border-bottom">
                                    <div class="h6 lead"><b>Weight:</b> {{ $pet->weight }}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <hr>
                    </div>
                    @if ($customer->first_name)
                        @if ($pet->reserve === "Reserved")
                        <div class="row">
                            <div class="col-lg  d-flex justify-content-center">
                                <p class="text-muted">Pet has already been reserved</p>
                            </div>
                            <div class="col-lg d-flex justify-content-center justify-content-lg-end">
                                <button class="btn btn-outline-danger" disabled>
                                    <i class="fa-solid fa-cart-arrow-down me-1"></i>
                                    Place Reservation
                                </button>
                            </div>
                        </div>
                        @else
                            <div class="d-flex justify-content-center justify-content-lg-end ">
                                <button class="btn text-light" style="background-color: #4381c1" data-bs-toggle="modal"
                                    data-bs-target="#reservationModal">
                                    <i class="fa-solid fa-cart-arrow-down me-1"></i>
                                    Place Reservation
                                </button>

                                {{-- Reservation Modal --}}
                                <div class="modal fade" id="reservationModal">
                                    <div class="modal-dialog modal-dialog-centered text-center">
                                        <div class="modal-content border border-success">
                                            <div class="modal-header d-flex justify-content-center">
                                                <div class="h4 ">Reservation</div>
                                            </div>
                                            <div class="modal-body">
                                                <p>By placing the reservation, you only have 24hours to claim
                                                    the pet from the Shop. If you haven't claim the pet within
                                                    24hours, the reservation will automatically cancelled and Pet
                                                    will be available again to other customer.
                                                </p>

                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <a href="/pets/{{ $pet->id }}/reservation" class="btn btn-outline-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="row">
                            <div class="col-lg  d-flex justify-content-center">
                                <p class="text-muted">Complete profile to <a href="/profile" target="_blank">proceed.</a></p>
                            </div>
                            <div class="col-lg d-flex justify-content-center justify-content-lg-end">
                                <button class="btn btn-outline-danger" disabled>
                                    <i class="fa-solid fa-cart-arrow-down me-1"></i>
                                    Place Reservation
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </x-layout>
    </section>
</x-navbar>
