<?php

include "cabeca.php";

?>

    <div class="espaco2"></div>
    <section class="ConteinerLogin">
        <form class="formulario2" action="<?php echo site_url('login/entrar')?> " method="post">
            <div class="form2-div">
                <h1>Login</h1>
                <p class="form-text text-muted">Seja Bem-Vindo de Volta! c:</p>
                <div class="form-login">
                    <label for="exampleFormControlInput1">Usuário</label>
                    <input type="text" class="form-control" id="exampleFormControlInput" name="email">
                </div>
                <br>
                <div class="form-login">
                    <label for="exampleFormControlInput1">Senha</label>
                    <input type="password" class="form-control" id="exampleFormControlInput" name="senha">
                </div>
            </div>
            <br>
            <div>
                <label>Tipo de Usuario</label>
                <div class="form-ano">
                    <input type="radio" name="tipo" value="0">
                    <label>Aluno</label>
                </div>
                <div class="form-ano">
                    <input type="radio" name="tipo" value="1">
                    <label>Professor</label>
                </div>
            </div>
            <div class="form2-div">
                <button type="submit" class="btn btn-primary" id="botaoLogin">Login</button>
            </div>
        </form>
    </section>

<?php

include "rodape.php";

?>