<?php 
if(isset($_SESSION['dadosusuario']['nivel_acesso'])){
    if($_SESSION['dadosusuario']['nivel_acesso'] == 1){
        header("Location: /home/admin");
    } elseif($_SESSION['dadosusuario']['nivel_acesso'] == 0){
        header("Location: /home/cliente");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Carregando CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo BASEURL;?>/assets/css/loginTemplate.css" rel="stylesheet" id="bootstrap-css">
    <!-- Carregando o bootstrap -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Página de Login - Jogo do Bicho</title>
</head>
<body>
    <div id="logreg-forms">
        <!-- /* Avisos -->
        <!-- Aviso 1 = CPF já cadastrado -->
        <?php if(isset($_GET['msg']) && $_GET['msg'] == 1): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Erro!</strong> CPF já cadastrado.
            </div>
        <?php endif; ?>
        <!-- Aviso 2 = Email já cadastrado -->
        <?php if(isset($_GET['msg']) && $_GET['msg'] == 2): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Erro!</strong> Email já cadastrado.
            </div>
        <?php endif; ?>
        <!-- Aviso 3 = Senhas não conferem -->
        <?php if(isset($_GET['msg']) && $_GET['msg'] == 3): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Erro!</strong> Senhas não conferem.
            </div>
        <?php endif; ?>
        <!-- Fim avisos -->
        
        <form class="form-signin" action="/acoes/login" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Entre com sua conta</h1>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" required="" autofocus="">
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
            <!-- <a href="#" id="forgot_pswd">Esqueceu sua senha?</a> -->
            <hr>
            
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Registre uma nova conta</button>
            </form>

            <!-- <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Endereço de Email" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Esqueci minha senha</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Voltar</a>
            </form> -->
            
            <form action="/acoes/registro/" class="form-signup" method="POST">
                <p style="text-align:center">Registre-se</p>
                

                <!-- CPF -->
                <input type="text" name="cpf" placeholder="CPF (Somente números)" class="form-control CPF">
                <!-- Nome -->
                <input type="text" name="nome" id="user-name" class="form-control" placeholder="Nome completo" required="" autofocus="" maxlength="100">
                <!-- Email -->
                <input type="email" name="email" id="user-email" class="form-control" placeholder="Endereço de Email" required autofocus="" maxlength="120">
                <!-- Senha -->
                <input type="password" name="senha" id="user-pass" class="form-control" placeholder="Senha" required autofocus="">
                <input type="password" name="re-senha" id="user-repeatpass" class="form-control" placeholder="Repita sua senha" required autofocus="">
                <!-- Telefone -->
                <input type="text" name="telefone" placeholder="Insira seu telefone" class="form-control telefone" required="">
                <!-- Estados -->
                <select id="estados" name="estado" class="form-control">
                    <option value="99">Estado (UF)</option>
                </select>
                <select id="cidades" name="cidade" class="form-control">

                </select>
                <!-- CEP -->
                <input type="text" name="cep" placeholder="Insira seu CEP" class="form-control CEP" required="">
                <!-- Logradouro --> 
                <input type="text" name="logradouro" maxlength="150" placeholder="Logradouro" class="form-control" required="">
                <!-- Numero -->
                <input type="text" name="numero" maxlength="8" placeholder="Nº Residência" class="form-control" required="">
                <!-- Bairro -->
                <input type="text" name="bairro" maxlength="28" placeholder="Bairro" class="form-control" required="">
                <!-- Complemento -->
                <input type="text" name="complemento" maxlength="30" placeholder="Complemento" class="form-control">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Registre-se</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Voltar</a>
            </form>
            <br>
            
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo BASEURL;?>/assets/js/jquery.mask.js" type="text/javascript"></script>
    <script src="<?php echo BASEURL; ?>/assets/js/script.js" type="text/javascript"></script>
    <!-- Carregando o JS -->
    <script>
        $(document).ready(function () {
        
            $.getJSON('/assets/js/estados_cidades.json', function (data) {

                var items = [];
                var options = '<option value="">Escolha um estado</option>';    

                $.each(data, function (key, val) {
                    options += '<option value="' + val.nome + '">' + val.nome + '</option>';
                });                 
                $("#estados").html(options);                
                
                $("#estados").change(function () {              
                
                    var options_cidades = '';
                    var str = "";                   
                    
                    $("#estados option:selected").each(function () {
                        str += $(this).text();
                    });
                    
                    $.each(data, function (key, val) {
                        if(val.nome == str) {                           
                            $.each(val.cidades, function (key_city, val_city) {
                                options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                            });                         
                        }
                    });

                    $("#cidades").html(options_cidades);
                    
                }).change();        
            
            });


            //Formularios
            $('.telefone').mask('(00) 0 0000-0000');
            $('.CEP').mask('00.000-000');
            $('.CPF').mask('000.000.000-00', {reverse: true});
        
        });
        // Muda o RESET PASSWORD do Formulário.
        function toggleResetPswd(e){
            e.preventDefault();
            $('#logreg-forms .form-signin').toggle() // display:block or none
            $('#logreg-forms .form-reset').toggle() // display:block or none
        }
        // Muda para a FUNÇÃO CADASTRE-SE do Formulário
        function toggleSignUp(e){
            e.preventDefault();
            $('#logreg-forms .form-signin').toggle(); // display:block or none
            $('#logreg-forms .form-signup').toggle(); // display:block or none
        }

        // Função usada para redirecionar os cliques (JQuery)
        $(()=>{
            // Login Register Form
            $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
            $('#logreg-forms #cancel_reset').click(toggleResetPswd);
            $('#logreg-forms #btn-signup').click(toggleSignUp);
            $('#logreg-forms #cancel_signup').click(toggleSignUp);
        })
    </script>
    <!-- fim do js -->
    
</body>
</html>