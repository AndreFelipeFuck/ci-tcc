
<?php  include "cabeca.php";?>
<?php if(isset($_SESSION['alunos']) == null and isset($_SESSION['professores']) == null){?>
    <div class="espaco2"></div>
        <section class="logFun">
            <div class="ConteinerLogin"> 
                <section class="logTex">
                    <div>
                        <h1>Seja Bem-Vindo de Volta!</h1>
                    </div>
                </section>
                <section class="logCad" id="sombra">
                    <form class="form-group" action="<?php echo site_url('login/entrar')?> " method="post">
                        <h1>Login</h1>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Usuário</label>
                                <input type="text" class="form-control" id="logInput" name="nomeCompleto" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha</label>
                                <input type="password" class="form-control" id="logInput" name="senha" required>
                            </div>
                            <br>
                            <!-- <div>
                                <label>Tipo de Usuario</label>
                                <br>
                                <div class="form-ano">
                                    <input type="radio" name="tipo" value="0">
                                    <label>Aluno</label>
                                </div>
                                <div class="form-ano">
                                    <input type="radio" name="tipo" value="1">
                                    <label>Professor</label>
                                </div>
                            </div> -->
                        <div>
                            <label><input type="checkbox" name="lembra">Lembrar de mim</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="botaoLogin">Login</button>
                        </div>
                    </form>
                </section>
            </div>
        </section>
<?php }else{?>
    <meta http-equiv="refresh" content="0;url=<?php echo site_url('')?>" />
<?php } ?>
<?php  include "rodape.php";?>