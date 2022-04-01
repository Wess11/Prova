<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 15px sans-serif ; }
        .wrapper{width: 400px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Seja um Fatecano em 2022</h2>
        <p>Cadastros de novos alunos FATEC Araras</p>
        <form action="processamento.php" method="post">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="Nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Sobrenome:</label>
                <input type="text" name="Sobrenome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Cidade do aluno:</label>
                <input type="text" name="RA" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Data de Nacimento:</label>
                <input type="text" name="DT" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Gravar">       
            </div>
            
        </form>
    </div>    
</body>
</html>