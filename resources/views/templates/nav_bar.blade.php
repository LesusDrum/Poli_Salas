

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="https://nsa.cps.sp.gov.br/" target= "_blank"><i class="fa fa-institution fa-fw"></i> Acesse o NSA </a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <!--<script src = "javascript.js"></script>
                            <script src = "jquery-3.5.1.js"></script>
                            <form action = "check_notifications.php" action = "POST">
                            <label name = 'notificacao' id = 'notificacao'></label>
                            </form>-->
                        <?php
                            if(!isset($_SESSION['cod_user'])){
                                echo "
                                <li>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                        <i class='fa fa-bell fa-fw'></i> <b class='caret'></b>
                                    </a>
                                    <ul class='dropdown-menu dropdown-alerts'>
                                        <li>
                                            <div class='panel-body'>
                                            </div>
                                        </li>
                                    </ul>
                                </li>";
                            }else{
                                echo "
                                <li>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                        <i class='fa fa-bell fa-fw'></i> <b class='caret'></b>
                                    </a>
                                    <ul class='dropdown-menu dropdown-alerts'>
                                    <li>
                                        <div class='panel-body'>";
                                        $cod_user = $_SESSION['cod_user'];
                                        include("connect.php");
                                        $sql_return = "SELECT CURTIME()";
                                        $sql_return_time = mysqli_query($teste,$sql_return);
                                        /*while ($line = mysqli_fetch_assoc($sql_return_time)){
                                            if ($line['CURTIME()'] >= "00:00:00"){
                                                if ($line['CURTIME()'] <= "03:00:00"){
                                                    $date = "CURDATE() - 1";
                                                }else{
                                                   $date = "CURDATE()"; 
                                                }
                                            }
                                        }*/
                                        $sql_retorno = "SELECT cod_turma FROM usuarios_turmas WHERE cod_user = $cod_user";
                                        $sql_retorno_turmas = mysqli_query($teste, $sql_retorno);
                                        $rows = mysqli_num_rows($sql_retorno_turmas);
                                        if ($rows == 0){
                                            echo "
                                            <div class='alert alert-info'>
                                                Por não estar cadastrado em nenhuma turma, você não receberá notificações de salas reservadas
                                            </div>";
                                        }else{
                                            while ($Linha = mysqli_fetch_assoc($sql_retorno_turmas)){
                                                $cod_turma = $Linha['cod_turma'];
                                            }
                                            $incremento = 1;
                                            //$date = new DateTime("now", new DateTimezone("America/Sao_Paulo"));
                                            //date_default_timezone_set('America/Sao_Paulo');
                                            //date_timezone_set('CURDATE()', timezone_open('America/Sao_Paulo'));
                                            /*$sql_retorna = "SELECT CONVERT_TZ(NOW(), '+00:00', '-03:00')";
                                            $sql_retorna_tz = mysqli_query($teste, $sql_retorna);
                                            while ($linha = mysqli_fetch_assoc($sql_retorna_tz)){
                                                $date = $Linha['NOW()'];
                                            }*/
                                            $sql_return = "SELECT DATE(DATE_ADD(CURDATE(), INTERVAL -3 HOUR)) data_atual";
                                            $sql_return_date = mysqli_query($teste, $sql_return);
                                            while ($line = mysqli_fetch_assoc($sql_return_date)){
                                                $date = $line['data_atual'];
                                            }
                                            $sql_retorno = "SELECT cod_res FROM reservas WHERE data = DATE(DATE_ADD(NOW(), INTERVAL -3 HOUR)) AND cod_turma = $cod_turma";
                                            $sql_retorno_reservas = mysqli_query($teste, $sql_retorno);
                                            $num_rows = mysqli_num_rows($sql_retorno_reservas);
                                            if ($num_rows == 0){
                                                echo "
                                                <div class='alert alert-info'>
                                                    Nenhuma sala foi reservada para a sua turma até o momento.
                                                </div>";
                                            }else{
                                                do{
                                                    echo "
                                                    <div class='alert alert-info alert-dismissible'>
                                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                        Uma sala foi reservada para a sua turma.<a href='index.php' class='alert-link'>Ver reservas.</a>
                                                    </div>";
                                                $incremento++; 
                                                }while($incremento <= $num_rows);
                                            }
                                        }
                                        echo "</div>
                                    </li>
                                </ul>
                            </li>";
                            }
                        ?>
                    <?php 
                        if (!isset($_SESSION["cod_user"])){
                            echo "<button type='button' class='btn btn-info'><a href='forms_users_signup.php'>Cadastro</a></button>
                            <button type='button' class='btn btn-info'><a href='login.php'>Login</a></button>";
                        }else{ 
                        ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["nome"]; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="profile.php"><i class="fa fa-user fa-fw"></i>Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
                        </ul>
                    </li>
                    <?php 
                        } 
                    ?>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

               @extends('templates/menu')
            </nav>
