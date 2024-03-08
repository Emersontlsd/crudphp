<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP CRUD</title>
</head>
<body>
    <div class="navbar navbar-light bg-light menu"> 
        <a class="navbar-brand" href="#">CRUD PHP</a>
    </div>
    
    <div>
        <form>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" autofocus value="" class="form-control" require/>
            </div>
            
            <div>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" value="" class="form-control" require/>
            </div>
            
            <div>
                <label>Idade</label>
                <input type="number" name="sobrenome" value="" class="form-control" require/>
            </div>
            <div>
                <label>Sexo</label>
                <select name="sexo" id="" value="" class="form-control">
                    <option value="mas">Masculino</option>
                    <option value="fem">Feminino</option>
                </select>
            </div>
            <div>
                <br>
                <div>
                     <button type="button" class="btn btn-primary" name="cadastrar">CADASTRAR</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>






<!-- c:\xampp\php\php.exe -S localhost:8000 --> 