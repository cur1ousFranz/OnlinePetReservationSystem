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
                                            <input class="shadow-sm form-control form-control" type="text"
                                                id="first_name" value="{{ $customer->first_name }}" name="first_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="civil_status">Civil Status
                                            </div></label>
                                            <select class="shadow-sm form-select form-control" name="civil_status" id="age">
                                                <option selected disabled>Select</option>
                                                <option {{ $customer->civil_status === "Single" ? 'selected' : ''}} value="Single">Single</option>
                                                <option {{ $customer->civil_status === "Married" ? 'selected' : ''}}  value="Married">Married</option>
                                                <option {{ $customer->civil_status === "Divorced" ? 'selected' : ''}}  value="Divorced">Divorced</option>
                                                <option {{ $customer->civil_status === "Widowed" ? 'selected' : ''}}  value="Widowed">Widowed</option>
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
                                            <input class="shadow-sm form-control form-control" type="text"
                                                id="middle_name" value="{{ $customer->middle_name }}" name="middle_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="nationality">Nationality</label>
                                            </div>
                                            <select class="shadow-sm form-select form-control" name="nationality">
                                                <option selected disabled>Select</option>
                                                <option {{ $customer->nationality === "Afghan" ? 'selected' : ''}} value="Afghan">
                                                    Afghan
                                                </option>
                                                <option {{ $customer->nationality === "American" ? 'selected' : ''}} value="American">
                                                    American
                                                </option>
                                                <option {{ $customer->nationality === "Australian" ? 'selected' : ''}} value="Australian">
                                                    Australian
                                                </option>
                                                <option {{ $customer->nationality === "Bahamian" ? 'selected' : ''}} value="Bahamian">
                                                    Bahamian
                                                </option>
                                                <option {{ $customer->nationality === "Bahraini" ? 'selected' : ''}} value="Bahraini">
                                                    Bahraini
                                                </option>
                                                <option {{ $customer->nationality === "Bangladeshi" ? 'selected' : ''}} value="Bangladeshi">
                                                    Bangladeshi
                                                </option>
                                                <option {{ $customer->nationality === "Cambodian" ? 'selected' : ''}} value="Cambodian">
                                                    Cambodian
                                                </option>
                                                <option {{ $customer->nationality === "Chinese" ? 'selected' : ''}} value="Chinese">
                                                    Chinese
                                                </option>
                                                <option {{ $customer->nationality === "Canadian" ? 'selected' : ''}} value="Canadian">
                                                    Canadian
                                                </option>
                                                <option {{ $customer->nationality === "Dominican" ? 'selected' : ''}} value="Dominican">
                                                    Dominican
                                                </option>
                                                <option {{ $customer->nationality === "Egyptian" ? 'selected' : ''}} value="Egyptian">
                                                    Egyptian
                                                </option>
                                                <option {{ $customer->nationality === "Ethiopian" ? 'selected' : ''}} value="Ethiopian">
                                                    Ethiopian
                                                </option>
                                                <option {{ $customer->nationality === "Filipino" ? 'selected' : ''}} value="Filipino">
                                                    Filipino
                                                </option>
                                                <option {{ $customer->nationality === "French" ? 'selected' : ''}} value="French">
                                                    French
                                                </option>
                                                <option {{ $customer->nationality === "German" ? 'selected' : ''}} value="German">
                                                    German
                                                </option>
                                                <option {{ $customer->nationality === "Hungarian" ? 'selected' : ''}} value="Hungarian">
                                                    Hungarian
                                                </option>
                                                <option {{ $customer->nationality === "Indonesian" ? 'selected' : ''}} value="Indonesian">
                                                    Indonesian
                                                </option>
                                                <option {{ $customer->nationality === "Italian" ? 'selected' : ''}} value="Italian">
                                                    Italian
                                                </option>
                                                <option {{ $customer->nationality === "Jamaican" ? 'selected' : ''}} value="Jamaican">
                                                    Jamaican
                                                </option>
                                                <option {{ $customer->nationality === "Japanese" ? 'selected' : ''}} value="Japanese">
                                                    Japanese
                                                </option>
                                                <option {{ $customer->nationality === "Mexican" ? 'selected' : ''}} value="Mexican">
                                                    Mexican
                                                </option>
                                                <option {{ $customer->nationality === "Malaysian" ? 'selected' : ''}} value="Malaysian">
                                                    Malaysian
                                                </option>
                                                <option {{ $customer->nationality === "Nigerien" ? 'selected' : ''}} value="Nigerien">
                                                    Nigerien
                                                </option>
                                                <option {{ $customer->nationality === "Pakistani" ? 'selected' : ''}} value="Pakistani">
                                                    Pakistani
                                                </option>
                                                <option {{ $customer->nationality === "Portuguese" ? 'selected' : ''}} value="Portuguese">
                                                    Portuguese
                                                </option>
                                                <option {{ $customer->nationality === "Romanian" ? 'selected' : ''}} value="Romanian">
                                                    Romanian
                                                </option>
                                                <option {{ $customer->nationality === "Russian" ? 'selected' : ''}} value="Russian">
                                                    Russian
                                                </option>
                                                <option {{ $customer->nationality === "South Korean" ? 'selected' : ''}} value="South Korean">
                                                    South Korean
                                                </option>
                                                <option {{ $customer->nationality === "Singaporean" ? 'selected' : ''}} value="Singaporean">
                                                    Singaporean
                                                </option>
                                                <option {{ $customer->nationality === "Taiwanese" ? 'selected' : ''}} value="Taiwanese">
                                                    Taiwanese
                                                </option>
                                                <option {{ $customer->nationality === "Zambian" ? 'selected' : ''}} value="Zambian">
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
                                            <input class="shadow-sm form-control form-control" type="text"
                                                id="last_name" value="{{ $customer->last_name }}" name="last_name">
                                        </div>

                                        <div class="col-md">
                                            <div>
                                                <label for="contact_number">Contact Number
                                            </div></label>
                                            <input class="shadow-sm form-control form-control" type="tel"
                                                id="contact_number" value=" {{ $customer->contact->contact_number }}" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11"
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
                                                    // Checking for current age of customer
                                                    for($i=1; $i<=60; $i++){
                                                        if($customer->age == $i){
                                                            echo "<option value='$i' selected>" . $i ."</option>";
                                                        }else{
                                                            echo "<option value='$i'>" . $i ."</option>";
                                                        }
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
                                            <input class="shadow-sm form-control form-control" type="email"
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
                                            <input class="shadow-sm form-control form-control" type="text"
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
