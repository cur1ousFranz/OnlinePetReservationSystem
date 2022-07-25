<x-navbar>
    <section>
        <x-layout>
            <div class="h4">Your Reservations</div>
            <div class="card shadow">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    @foreach ($pet_reserve as $pets)
                        @php
                            $pet = \App\Models\Pet::where('id', $pets->pets_id)->first();
                        @endphp
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="d-flex justify-content-center">
                                            <img class="img-fluid rounded rounded-3 border shadow w-50" style="height: 150px"
                                            src="{{ asset('/storage/' . $pet->image) }}" alt="Photo of {{ $pet->type }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 d-lg-flex justify-content-lg-center align-items-center">
                                <div class="col-lg text-center mt-3">
                                    <i class="fa-solid fa-heart me-1"></i>Breed: <p class="text-muted">{{ $pet->breed }}</p>
                                </div>
                                <div class="col-lg text-center mt-3">
                                    <i class="fa-solid fa-mars-and-venus me-1"></i>Gender: <p class="text-muted">{{ $pet->gender }}</p>
                                </div>
                                <div class="col-lg text-center mt-3">
                                    <i class="bi bi-tags-fill me-1"></i>Price: <p class="text-muted">{{ $pet->price }}</p>
                                </div>
                                <div class="col-lg text-center mt-3">
                                    <i class="bi bi-calendar3 me-1"></i>Reservation Due: <p class="text-muted">{{ date('F j, Y', strtotime($pets->reserved_due ))  }}</p>
                                </div>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <hr>
                        @endif
                    @endforeach
                </div>
              </div>
        </x-layout>
    </section>
</x-navbar>
