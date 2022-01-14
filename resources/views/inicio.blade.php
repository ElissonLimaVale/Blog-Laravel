<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-grid.min.css" integrity="sha512-Xj2sd25G+JgJYwo0cvlGWXoUekbLg5WvW+VbItCMdXrDoZRWcS/d40ieFHu77vP0dF5PK+cX6TIp+DsPfZomhw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.19.1/bootstrap-table.min.css" integrity="sha512-Ulm5pOx2O8n6XDa0CY2S+GfOmV2R2SrvCpVmhjsxi4VmvcqB5JM5POLuePq496f9CkeAtvPpJlcjLRcTPk79iw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <div class=container>
        <h1>Usuários do sistema</h1>
        <table id="table" class="display striped" style="width:100%">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Senha</td>
                </tr>  
            </thead> 
            <tbody>
                @foreach($users as $value)
                <tr>
                    <td>{{$value->nome}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->senha}}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.19.1/bootstrap-table.min.js" integrity="sha512-SoNdA/8QMSSlEcJAXKdAALavPMfGJnoh/96Tosg3qxQhdktSAttyHT7ePJghxJNvLCeyJYtXcdrTgLvHHsbRcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(() => {
            $("#table").DataTable();
        });
    </script>
    </body>
</html>