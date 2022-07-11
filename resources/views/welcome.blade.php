<x-navbar>
    <section class="text-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum quis rerum fugit neque recusandae perferendis!</p>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card" style="height: 400px; width: 450px">
                        <div class="card-body">
                            <form action="/signin" method="post">
                                @csrf

                                <div class="h2 d-flex justify-content-center">Sign in</div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="container">
                                            <div>
                                                <label for="username">Username</label>
                                                <input class="form-control form-control" type="text" id="username"
                                                    name="username" value="{{ old('username') }}">

                                                @error('username')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="password">Password</label>
                                                <input class="form-control form-control" type="password" id="password"
                                                    name="password" value="{{ old('password') }}">

                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="row mt-4">
                                                <div class="d-flex justify-content-center">
                                                    <a href="">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div>
                                                    <button type="submit"
                                                        class="btn text-light form-control form-control-lg mt-3"
                                                        style="background-color: #4381c1">
                                                        Sign in
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-navbar>
