<?php
            if(autenticado()){
            ?>
                
            <div class="login_form" id="form_login">
                <div class="form_l">
                    <h2>boas a tudos</h2>
                    <?php
                        echo '<table border="1">'."\n";
                        echo '<tr><td>';
                            echo ($utilizador['email']);
                        echo '</td><td>';
                            echo ($utilizador['nome']);
                        echo '</tr>';
                        echo '</table >';
                    ?>
                    <div class="container ">
                        
                            <form class="form-container" action="/src/controller/client/contr_autenticar.php" method="post">
                                <input type="hidden" name="page" value="<?php echo $page; ?>">
                                <button class="btn btn-danger" type="submit"  name="utilizador" value="logout">Logout</button>
                                <?php
                                if(admin()){
                                ?>    
                                   <a class="col-4 btn btn-primary"  style="text-decoration: none;  color: white;" href="/pages/admin/administraçao/administraçao.php">administraçao</a>
                                <?php
                                }else{
                                ?>
                                   <a class="col-4 btn btn-success"style="text-decoration: none;  color: white;" href="/pages/client/perfil/perfil.php">Perfil</a>
                                <?php
                                }
                                ?>
                            </form>    
                    </div>
                </div>    
            </div>

            <?php 
            }else{
            ?>
                <div class="login_form" id="form_login">
                    <form action="/src/controller/client/contr_autenticar.php" method="post"  class="form-container form_l">
                        <h3>Login</h3>
                        <?php 
                            if(isset($_SESSION['erros'])){
                                echo '<div class="alert alert-danger">';
                                foreach($_SESSION['erros'] as $error){
                                    echo $error .'<br>';
                                };
                                echo '</div>';
                            };
                            unset($_SESSION['erros']);
                        ?>

                        <label for="email" class="form-label"><b>Email</b></label>
                        <input class="form-control" type="text" placeholder="Enter Email" name="email"  required>

                        <label for="psw" class="form-label"><b>Password</b></label>
                        <input class="form-control" type="password" placeholder="Enter Password" name="pass"   required>

                        <input type="hidden" name="page" value="<?php echo $page; ?>">

                        <div class="container">
                                <button class="btn btn-success" type="submit" name="utilizador" value="login">Login</button>
                                <a href="/pages/client/registo/registo.php" class="btn btn-primary">registar</button></a>
                        </div>    
                    </form>
                </div>
                    
              
            <?php     
            };    
            ?>