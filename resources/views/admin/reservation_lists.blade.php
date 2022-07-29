<x-navbar>
    <section>
        <x-layout>
            <div class="h4">All Reservations</div>
            <div class="card shadow">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    @if (!$pet_list->isEmpty())
                        @foreach ($pet_list as $pets)
                            @php
                                $pet = \App\Models\Pet::where('id', $pets->pets_id)->first();

                                $dueDay = date('d', strtotime($pets->reserved_due));
                                $dueMonth = date('m', strtotime($pets->reserved_due));
                                $dueYear = date('Y', strtotime($pets->reserved_due));

                                $isDue = false;
                                if($dueYear < date('Y')){
                                    $isDue = true;
                                }

                                if($dueYear === date('Y')){
                                    if($dueMonth < date('m')){
                                        $isDue = true;
                                    }
                                    if($dueMonth === date('m')){

                                        if($dueDay < date('d')){
                                            $isDue = true;
                                        }
                                    }

                                }

                                if($isDue){

                                    \App\Models\Pet::where('id', $pets->pets_id)->update([
                                        'reserve' => "Available"
                                    ]);

                                    \App\Models\Reservation::where('id', $pets->id)->update([
                                        'status' => "Cancelled"
                                    ]);

                                    continue;
                                }

                            @endphp
                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid rounded rounded-3 border shadow w-50"
                                                    style="height: 150px" src="{{ asset('/storage/' . $pet->image) }}"
                                                    alt="Photo of {{ $pet->type }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 ">
                                    <div class="row">
                                        <div class="col-lg d-lg-flex justify-content-lg-center align-items-center">
                                            <div class="col-lg text-center mt-3">
                                                <i class="fa-solid fa-heart me-1"></i>Breed: <p class="text-muted">
                                                    {{ $pet->breed }}</p>
                                            </div>
                                            <div class="col-lg text-center mt-3">
                                                <i class="fa-solid fa-mars-and-venus me-1"></i>Gender: <p class="text-muted">
                                                    {{ $pet->gender }}</p>
                                            </div>
                                            <div class="col-lg text-center mt-3">
                                                <i class="bi bi-tags-fill me-1"></i>Price: <p class="text-muted">{{ $pet->price }}
                                                </p>
                                            </div>
                                            <div class="col-lg text-center mt-3">
                                                <i class="bi bi-calendar3 me-1"></i>Reservation Due: <p class="text-muted">
                                                    {{ date('F j, Y', strtotime($pets->reserved_due)) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <hr class="w-75">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg d-lg-flex justify-content-lg-center align-items-center">
                                            <div class="col-lg text-center mt-3">
                                                Customer Name: <p class="text-muted">
                                                    {{ $pets->customer->first_name . ' ' . $pets->customer->last_name}}</p>
                                            </div>
                                            <div class="col-lg text-center mt-3">
                                                Contact Number: <p class="text-muted">
                                                    {{ $pets->customer->contact->contact_number }}</p>
                                            </div>
                                            <div class="col-lg text-center mt-3">
                                                Customer ID: <p class="text-muted">
                                                    {{ $pets->customer->id }}
                                                </p>
                                            </div>
                                            <div class="col-lg text-center">
                                                <a href="/pets/reservations/{{ $pets->pets_id }}/claim" class="btn text-white" style="background-color: #4381c1">
                                                Claimed
                                                </a>
                                            </div>
                                        </div>

                                        {{-- CLAIM PET MODAL
                                        <div class="modal fade" id="claimPetModal">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border border-1 border-dark">
                                                    <div class="modal-header d-flex justify-content-center">
                                                        <div class="h4 modal-title text-muted">Pet Claimed</div>
                                                    </div>

                                                    <div class="container">
                                                        <div class="modal-body text-center text-muted">
                                                            <h5>Are you sure you want to proceed?</h4>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="button" class="btn text-light me-2"
                                                                style="background-color: #ff5154" data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                            <a href="/pets/reservations/{{ $pets->pets_id }}/claim" class="btn text-light"
                                                                style="background-color: #4381c1">
                                                                Confirm
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    @else
                    <h6 class="text-muted">No pet reservations yet.</h6>
                    @endif
                </div>
            </div>
        </x-layout>
    </section>
</x-navbar>
