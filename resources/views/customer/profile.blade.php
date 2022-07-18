<x-navbar>
    <section>
        <x-layout class="d-flex justify-content-center">
            <div class="card w-75 shadow-sm">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <img src="{{ asset('/storage/customer/default-pic.png') }}" alt=""
                                        class="rounded rounded-circle border img-fluid w-50 h-100"
                                        style="max-height: 120px">
                                </div>
                            </div>
                            <div class="row mt-4 ">
                                <div class="col d-flex justify-content-center">
                                    <i class="fa-solid fa-id-card mt-1 me-3"></i>
                                    <p class="m-0 float-start">{{ $customer->id }}</p>
                                </div>
                                <div class="container">
                                    <hr class="mt-1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <i class="fa-solid fa-user  mt-1 me-3"></i>
                                    <p class="m-0 float-start">{{ auth()->user()    ->username }}</p>
                                </div>
                                <div class="container">
                                    <hr class="mt-1">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 mt-4 mb-4 border-start border-1">
                            <div class="row">
                                <div class="d-flex">
                                    <h4>Profile</h4>
                                    <a href="/profiles/{{ $customer->id }}/edit" class="ms-auto">
                                        Edit Profile
                                    </a>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md">
                                        <label for="first_name">First Name</label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="first_name" value="{{ $customer->first_name }}" style="background-color: #fff;" disabled>
                                    </div>

                                    <div class="col-md">
                                        <div>
                                            <label for="civil_status">Civil Status
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="civil_status" value="{{ $customer->middle_name }}" style="background-color: #fff;"
                                            disabled>
                                    </div>
                                </div>

                                <div class="row mt-2">

                                    <div class="col-md">
                                        <div>
                                            <label for="middle_name">Middle Name
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="middle_name" value="{{ $customer->middle_name }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                    <div class="col-md">
                                        <div>
                                            <label for="nationality">Nationality
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="nationality" value="{{ $customer->nationality }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                </div>

                                <div class="row mt-2">
                                    <div class="col-md">
                                        <div>
                                            <label for="last_name">Last Name
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="last_name" value="{{ $customer->last_name }}" style="background-color: #fff;" disabled>
                                    </div>

                                    <div class="col-md">
                                        <div>
                                            <label for="contact_number">Contact Number
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="contact_number" value="{{ $customer->contact->contact_number }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                </div>

                                <div class="row mt-2">
                                    <div class="col-md">
                                        <div>
                                            <label for="age">Age
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="age" value="{{ $customer->age }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                    <div class="col-md">
                                        <div>
                                            <label for="contact_email">Contact Email
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="contact_email" value="{{ $customer->contact->contact_email }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                </div>

                                <div class="row mt-2">
                                    <div class="col-md">
                                        <div>
                                            <label for="age">Gender
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="age" value="{{ $customer->gender }}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                    <div class="col-md">
                                        <div>
                                            <label for="claimed">Total Claimed Pets
                                        </div></label>
                                        <input class="shadow-sm form-control form-control text-muted" type="text"
                                            id="claimed" value="{{ $customer->claimed_pet == null ? 0 : $customer->claimed_pet}}" style="background-color: #fff;"
                                            disabled>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </x-layout>
    </section>
</x-navbar>
