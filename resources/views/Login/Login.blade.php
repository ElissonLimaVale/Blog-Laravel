<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Orça Obra</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{asset('./image/logo.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('./css/login.css')}}"  />
        @yield('Styles')
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card my-5">
                        <form class="card-body cardbody-color p-lg-5" action="/home" method="Get">

                            <!-- <div class="text-center">
                                <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                            </div> -->

                            <div class="mb-3">
                                <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="User Name">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" placeholder="password">
                            </div>
                                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                                <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? <a href="#" class="text-dark fw-bold"> Create an Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>