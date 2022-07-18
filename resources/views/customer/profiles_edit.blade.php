<x-navbar>
    <section>
        <x-layout class="d-flex justify-content-center">
            <div class="card w-75 shadow-sm">
                <div class="card-body border-top border-bottom border-bottom-4 border-top-4 border-primary">
                    <div class="row">
                        <div class="col-md-4 mt-4 d-flex justify-content-center">
                            <img src="{{ asset('/storage/customer/default-pic.png') }}" alt=""
                                class="rounded rounded-circle border img-fluid w-50 h-100" style="max-height: 120px">
                        </div>

                        <div class="col-md-8 mt-4 mb-4 border-start border-1">
                            <form action="/profiles/{{ $customer->id }}/update" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div>
                                        <h4>Profile</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md">
                                            <label for="first_name">First Name</label>
                                            <input class="shadow-sm form-control form-control text-muted" type="text"
                                                id="first_name" value="" name="first_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="civil_status">Civil Status
                                            </div></label>
                                            <select class="shadow-sm form-select form-control" name="civil_status" id="age">
                                                <option selected disabled>Select</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>

                                            @error('civil_status')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-2">

                                        <div class="col-md">
                                            <div>
                                                <label for="middle_name">Middle Name
                                            </div></label>
                                            <input class="shadow-sm form-control form-control text-muted" type="text"
                                                id="middle_name" value="" name="middle_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="nationality">Nationality
                                            </div></label>
                                            <select class="shadow-sm form-select form-control" name="nationality">
                                                <option selected disabled>Select</option>
                                                <option value="Afghan">
                                                    Afghan
                                                </option>
                                                <option value="American">
                                                    American
                                                </option>
                                                <option value="Australian">
                                                    Australian
                                                </option>
                                                <option value="Bahamian">
                                                    Bahamian
                                                </option>
                                                <option value="Bahraini">
                                                    Bahraini
                                                </option>
                                                <option value="Bangladeshi">
                                                    Bangladeshi
                                                </option>
                                                <option value="Cambodian">
                                                    Cambodian
                                                </option>
                                                <option value="Chinese">
                                                    Chinese
                                                </option>
                                                <option value="Canadian">
                                                    Canadian
                                                </option>
                                                <option value="Dominican">
                                                    Dominican
                                                </option>
                                                <option value="Egyptian">
                                                    Egyptian
                                                </option>
                                                <option value="Ethiopian">
                                                    Ethiopian
                                                </option>
                                                <option value="Filipino">
                                                    Filipino
                                                </option>
                                                <option value="French">
                                                    French
                                                </option>
                                                <option value="German">
                                                    German
                                                </option>
                                                <option value="German">
                                                    German
                                                </option>
                                                <option  value="Hungarian">
                                                    Hungarian
                                                </option>
                                                <option value="Indonesian">
                                                    Indonesian
                                                </option>
                                                <option value="Italian">
                                                    Italian
                                                </option>
                                                <option value="Jamaican">
                                                    Jamaican
                                                </option>
                                                <option value="Japanese">
                                                    Japanese
                                                </option>
                                                <option value="Mexican">
                                                    Mexican
                                                </option>
                                                <option value="Malaysian">
                                                    Malaysian
                                                </option>
                                                <option value="Nigerien">
                                                    Nigerien
                                                </option>
                                                <option value="Pakistani">
                                                    Pakistani
                                                </option>
                                                <option value="Portuguese">
                                                    Portuguese
                                                </option>
                                                <option value="Romanian">
                                                    Romanian
                                                </option>
                                                <option value="Russian">
                                                    Russian
                                                </option>
                                                <option value="South Korean">
                                                    South Korean
                                                </option>
                                                <option value="Singaporean">
                                                    Singaporean
                                                </option>
                                                <option value="Taiwanese">
                                                    Taiwanese
                                                </option>
                                                <option value="Zambian">
                                                    Zambian
                                                </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md">
                                            <div>
                                                <label for="last_name">Last Name
                                            </div></label>
                                            <input class="shadow-sm form-control form-control text-muted" type="text"
                                                id="last_name" value="" name="last_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="contact_number">Contact Number
                                            </div></label>
                                            <input class="shadow-sm form-control form-control text-muted" type="tel"
                                                id="contact_number" value="" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11"
                                                name="contact_number">
                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md">
                                            <div>
                                                <label for="age">Age
                                            </div></label>
                                            <select class="shadow-sm form-select form-control" name="age" id="age">
                                                <option selected disabled>Select</option>
                                                @php
                                                    for($i=1; $i<=60; $i++){
                                                        echo "<option value='$i'>" . $i ."</option>";
                                                    }
                                                @endphp
                                            </select>

                                            @error('age')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="contact_email">Contact Email
                                            </div></label>
                                            <input class="shadow-sm form-control form-control text-muted" type="email"
                                                id="contact_email" value="{{ $customer->contact->contact_email }}" disabled>
                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md">
                                            <div>
                                                <label for="gender">Gender
                                            </div></label>
                                            <select class="shadow-sm form-select form-control" name="gender" id="age">
                                                <option selected disabled>Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>

                                            @error('gender')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="claimed">Total Claimed Pets
                                            </div></label>
                                            <input class="shadow-sm form-control form-control text-muted" type="text"
                                                id="claimed" value="{{ $customer->claimed_pet == null ? 0 : $customer->claimed_pet}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn float-end me-4 text-light" style="background-color: #4381c1">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-layout>
    </section>
</x-navbar>
