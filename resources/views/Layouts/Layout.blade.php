<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Orça Obra</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{asset('./image/logo.png')}}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-grid.min.css" integrity="sha512-Xj2sd25G+JgJYwo0cvlGWXoUekbLg5WvW+VbItCMdXrDoZRWcS/d40ieFHu77vP0dF5PK+cX6TIp+DsPfZomhw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.19.1/bootstrap-table.min.css" integrity="sha512-Ulm5pOx2O8n6XDa0CY2S+GfOmV2R2SrvCpVmhjsxi4VmvcqB5JM5POLuePq496f9CkeAtvPpJlcjLRcTPk79iw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" /> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css" /> -->
        <link rel="stylesheet" href="{{asset('./css/app.css')}}"  />
        @yield('Styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand menu-top-item" href="{{route('Site.Home')}}"><i class="fa fa-home"></i></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="RH" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-address-book"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Teste</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="Relatórios" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-list-alt"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Teste</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="E-mails Marketing" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-mail-bulk"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Teste</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="Orçamentário" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-calculator"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Teste</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="Marketing" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-ad"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Teste</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a title="Posts" class="btn dropdown-toggle menu-top-item" data-toggle="dropdown" href="#"><i class="fa fa-comment"></i></a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('Site.Posts')}}">Posts</a>
                                <a class="dropdown-item" href="{{route('Site.Posts.Create')}}">Create Post</a>
                            </ul>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="Get" action="/search">
                    <input name="busca" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>

        <div class="container-fluid" style="padding-top: 10px;padding-bottom: 10px;">
            @yield('content')
        </div>

        <footer class="footer navbar-fixed-bottom">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">FB.</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Newsletter</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js" ></script>
        @yield('Scripts')
        <script>
            
        </script>
    </body>
</html>