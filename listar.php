<html>
<head>
    <?php
        session_start();
    ?>
    <link rel="icon" type="image/png" href="img/logo2.png">
	<meta charset="UTF=8"/>
    <title>Listagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="7"><center>Olá funcionário
                    <?php 
                        echo $_SESSION['usuario'];
                    ?>
                    , aqui estão os pedidos:</center></th>
                </tr>
                <tr>
                    <th scope="col" colspan="7"><center>Listagem</center></th>
                </tr>
                <tr>
                    <th scope="col">Mesa</th>
                    <th scope="col">Entrada</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Prato Principal</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Sobremesa</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <?php
            
            $servername = "localhost";
            $username = "id15005083_rainer";
            $password = "*Xx?TDOFN3o?<_!a";
            $dbname = "id15005083_purosabor";
            $Comando = "SELECT * FROM pedido";
            
            //Conectar ao MYSQL
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die ("impossivel se conectar ao MYSQL");
            
            //execultar consulta
            $consulta= mysqli_query($conn, $Comando);
            $aux=0;
            while(mysqli_num_rows($consulta)>$aux){
            
            //pegar linha da consulta
            $rs = mysqli_fetch_array($consulta);
            echo("<tr>
                    <td>$rs[mesa]
                    <td>$rs[entrada]
                    <td>$rs[qentrada]
                    <td>$rs[principal]
                    <td>$rs[qprincipal]
                    <td>$rs[sobremesa]
                    <td>$rs[qsobremesa]
                </tr>");
            $aux++;
            }
            ?>
        </table><br><hr>
        <form method="POST" action="deletar.php">
            <center>
                <button type="submit" class="btn btn-danger">Apagar todos pedido</button>
            </center>
        </form> 
    </div>
 </body>
 </html>