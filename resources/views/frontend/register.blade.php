<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive register Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
                
        <!-- Boxicons CSS -->
        <link href="{{asset('https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css')}}" rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form register">
                <div class="form-content">
                    <header>Register</header>
                    <form action="#" method="post">
                    <div class="field input-field">
                            <input type="first name" placeholder="First Name" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="last name" placeholder="Last Name" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                       

                        <div class="field button-field">
                            <button>register</button>
                        </div>
                    </form>

                    
                </div>

              

               

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>register</header>
                    <form action="{{route('register')}}" method="post">
    @csrf
    <div class="field input-field">
        <input type="text" name="first_name" placeholder="First Name" class="input">
    </div>
    <div class="field input-field">
        <input type="text" name="last_name" placeholder="Last Name" class="input">
    </div>
    <div class="field input-field">
        <input type="email" name="email" placeholder="Email" class="input">
    </div>
    <div class="field input-field">
        <input type="password" name="password" placeholder="Create password" class="password">
    </div>
    <div class="field input-field">
        <input type="password" name="password_confirmation" placeholder="Confirm password" class="password">
        <i class='bx bx-hide eye-icon'></i>
    </div>
    <div class="field button-field">
        <button>Register</button>
    </div>
</form>


               

           
        </section>

        <!-- JavaScript -->
        <script src="{{asset('login/js/script.js')}}"></script>
    </body>
</html>