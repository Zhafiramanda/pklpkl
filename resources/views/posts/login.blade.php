<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
    />

</head>
<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
            background-image: url('assets/img/bgelitery.png');
            height: 350px;
            "></div>
        <!-- Background image -->
    
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -90px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5">
    
            <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Login into your account</h2>
                <form action="/login" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" autofocus required value="{{old('email')}}" />
                    <label class="form-label" for="email">Email address</label>
                    @error('email')
                    <div class="invalide-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                    Remember me
                    </label>
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Login
                </button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>