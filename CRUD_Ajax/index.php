<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Form</title>
</head>

<body>

    <!--Método Allan -->
    <?php require_once 'conexao.php' ?>

    <?php
    try {

        $stmt = $conexao->prepare('SELECT * FROM tbcontato');
        $stmt->execute();

        $listacontato = $stmt;
    } catch (Exception $e) {
        echo '<pre>';
        print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
    ?>


    <section>
        <header>
            <h2>Contato</h2>
        </header>
        <form name="contato">
            <input class="inp" type="text" placeholder="#" readonly="" name="txtId" id="txtId" value="<?php echo @$_GET['id']; ?>"><br>
            <input class="inp" type="text" placeholder="Nome" name="txtNome" id="txtNome" value="<?php echo @$_GET['nome']; ?>"><br>
            <input class="inp" type="text" placeholder="Email" name="txtEmail" id="txtEmail" value="<?php echo @$_GET['email']; ?>"><br>
            <input class="inp" type="text" placeholder="Assunto" name="txtAssunto" id="txtAssunto" value="<?php echo @$_GET['assunto']; ?>"><br>
            <textarea class="tx" placeholder="Mensagem" name="txtArea" id="txtArea"><?php echo @$_GET['mensagem']; ?></textarea><br>
            <input class="btn" type="submit" value="Enviar" id="btn" onclick="validar()">


            <div class="msg" style="display:none;">
                <p class="pmsg">Teste</p>
            </div>

        </form>
    </section>
    <section class="list">
        <header>
            <h2>Lista contatos</h2>
        </header>
        <div class="lista">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                        <th class="acao">Editar</th>
                        <th class="acao">Excluir</th>
                    </tr>
                </thead>
                <tbody class="result">
                    <?php foreach ($listacontato as $linha) { ?>
                        <tr>
                            <td><?php echo $linha['id'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['email'] ?></td>
                            <td><?php echo $linha['assunto'] ?></td>
                            <td><?php echo $linha['mensagem'] ?></td>
                            <td><a class="btnEditar" id='editar' href="?id=<?php echo $linha['id'] ?>
                                                                    &nome=<?php echo $linha['nome'] ?>
                                                                    &email=<?php echo $linha['email'] ?>
                                                                    &assunto=<?php echo $linha['assunto'] ?>
                                                                    &mensagem=<?php echo $linha['mensagem'] ?>">Editar</a></td>
                            <td><a href="javascript:void(0)" id='<?php echo $linha['id'] ?>' class="btnExcluir">Excluir</a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <footer>
        <p>&copy;JackelineEstudante</p>
    </footer>
    <script type="text/javascript">
        function validar() {

            var nome = contato.txtNome.value
            var email = contato.txtEmail.value
            var assunto = contato.txtAssunto.value
            var mensagem = contato.txtArea.value

            if (nome == "") {
                alert('O campo "Nome" está em branco! Por favor, preencha-o.')
                txtNome.focus
                return false
            } else if (email = "") {
                alert('O campo "Email" está em branco! Por favor, preencha-o.')
                txtEmail.focus
                return false
            } else if (assunto == "") {
                alert('O campo "Assunto" está em branco! Por favor, preencha-o.')
                txtAssunto.focus
                return false
            } else if (mensagem == "") {
                alert('O campo "Mensagem" está em branco! Por favor, preencha-o.')
                txtArea.focus
                return false
            }
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    //--Rotina Ajax-Inserção
    jQuery('#btn').click(function() {
        var id = contato.txtId.value;
        if (id == "") {


            var dataAjax = {
                'txtNome': jQuery('#txtNome').val(),
                'txtEmail': jQuery('#txtEmail').val(),
                'txtAssunto': jQuery('#txtAssunto').val(),
                'txtArea': jQuery('#txtArea').val()
            };

            pageurl = 'registrar.php';

            //--Local de destino ds dados; Dados; Metodo de Envio;
            jQuery.ajax({
                url: pageurl,
                data: dataAjax,
                type: 'POST',
                success: function(html) {
                    jQuery('.msg').show();
                    jQuery('.pmsg').html("Dados inseridos com sucesso!");
                    jQuery('.msg').animate({
                        scrollTop: 0
                    }, 500);
                    jQuery('.msg').fadeOut(2000);
                    
                    setTimeout(function() {

                        location.href = "/"

                    }, 2000);

                }
            });
        }
    });

    //--Rotina Ajax-Alteração
    jQuery('#btn').click(function() {

        var id = contato.txtId.value;
        if (id != "") {


            var dataAjax = {
                'txtId': jQuery('#txtId').val(),
                'txtNome': jQuery('#txtNome').val(),
                'txtEmail': jQuery('#txtEmail').val(),
                'txtAssunto': jQuery('#txtAssunto').val(),
                'txtArea': jQuery('#txtArea').val()
            };

            pageurl = 'editar.php';

            //--Local de destino ds dados; Dados; Metodo de Envio;
            jQuery.ajax({
                url: pageurl,
                data: dataAjax,
                type: 'POST',
                success: function(html) {
                    jQuery('.msg').show();
                    jQuery('.pmsg').html("Dados alterados com sucesso!");
                    jQuery('.msg').animate({
                        scrollTop: 0
                    }, 500);
                    jQuery('.msg').fadeOut(2000);

                    setTimeout(function() {

                        location.href = "index.php";

                    }, 2000);

                }
            });
        }
    });

    //--Rotina Ajax-Exclusão
    jQuery('.btnExcluir').click(function() {

        var el = $(this);
        var id = el.attr('id');
        var info = 'id=' + id;

        if (confirm("Deseja realmente excluir?")) {




            //--Local de destino ds dados; Dados; Metodo de Envio;
            jQuery.ajax({
                url: "./deletar.php?id=" + id,
                data: info,
                type: 'GET',
                success: function() {
                    jQuery('.msg').show();
                    jQuery('.pmsg').html("Dados excluídos com sucesso!");
                    jQuery('.msg').animate({
                        scrollTop: 0
                    }, 500);
                    jQuery('.msg').fadeOut(2000);

                    setTimeout(function() {

                        location.href = "index.php";

                    }, 2000);

                }
            });
        }

    });

    //--Trabalhando com a tag form e propriedade submit
    jQuery('form').on('submit', function(e) {
        e.preventDefault();
    });
</script>

</html>