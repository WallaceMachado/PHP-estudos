<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>
<?php // acima e o link do boodstrap usado ?>v
<h2>Cadastro</h2>

<?php 
error_reporting(E_ERROR);  // mostrar somente erros e não advertencias
if(count($_POST) > 0) {// verifica se tem algo no array post 
    $erros = []; // array para armazenar os erros

    // isset($_POST['nome'])
    if(!filter_input(INPUT_POST, "nome")) {// verifica se tem algo no array post e faz a validação no campo nome
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(filter_input(INPUT_POST, "nascimento")) {// verifica se o campo nome foi preenchido
        $data = DateTime::createFromFormat(
            'd/m/Y', $_POST['nascimento']);
        if(!$data) { // caso a data não esteja no formato acima ela não será setada no array post, caso não seja aparecerá o erro abaixo
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {  // caso o email não esteja no formato da validação de email automatica do php, ela não será setada no array post, caso não seja aparecerá o erro abaixo
        $erros['email'] = 'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {// caso o site não esteja no formato da validação de site automatica do php, ela não será setada no array post, caso não seja aparecerá o erro abaixo
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];

    // caso o numero de filhos não esteja no formato da validação de inteiro automatica do php, ou não obedeça a configuração acima, ela não será setada no array post, caso não seja aparecerá o erro abaixo
    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT,
        $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20).';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'],
        FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }
}
?>

<!-- caso queira mostrar todos os erros no preenchimento do formulário na tela, acima do formulário, caso queira no campo deverá colocar a verificação de erro em cada campo como feito abaixo no <div class="invalid-feedback"-->
<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?>

<?php // formulário abaixo em html ?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text"                             
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text"
                class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
                id="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text"
                class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>"
                id="site" name="site" placeholder="Site"
                value="<?= $_POST['site'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" 
                class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''?>"
                id="filhos" name="filhos"
                placeholder="Qtde de Filhos"
                value="<?= $_POST['filhos'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text"
                class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>"
                id="salario" name="salario"
                placeholder="Salário"
                value="<?= $_POST['salario'] ?>">
                <!-- exibir os erros na tela no campo, tem que acrescentar na class="form-group" acima-->
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>