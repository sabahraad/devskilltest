<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center h-100">
                <div class="col-md-4 my-auto ">
                    <div class="card shadow">
                        <img src="{{asset('image/logo.jpg')}}" class="card-img-top" alt="...">
                        <div class="p-4">
                            <div class="justify-content-between d-flex">
                                <h5 >Sign In</h5>
                                <div>
                                    <a href="#" class="text-secondary border px-2 py-1 rounded"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="text-secondary border px-2 py-1 rounded"><i class="bi bi-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <form method="POST" action="{{ route('login.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                  
                                  <div class="mb-3">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <span class="input-group-text bg-transparent" id="togglePassword">
                                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn col-12 btn-success">Login</button>
                            </form>
                            <div class="justify-content-between d-flex my-3">
                                <div class="form-check">
                                    <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-success" for="flexCheckDefault">
                                      Remember Me
                                    </label>
                                  </div>
                                <div>
                                    <a href="#" class="text-secondary text-decoration-none">Forget Password</a>
                                </div>
                            </div>

                            <div>
                                <p class="text-center text-sm">Not a Member? <a href="#" class="text-success text-decoration-none">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            document.getElementById('togglePassword').addEventListener('click', function () {
                const passwordInput = document.getElementById('password');
                const toggleIcon = document.getElementById('toggleIcon');
        
                // Toggle password visibility
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('bi-eye-slash');
                    toggleIcon.classList.add('bi-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('bi-eye');
                    toggleIcon.classList.add('bi-eye-slash');
                }
            });
        </script>
    </body>
</html>