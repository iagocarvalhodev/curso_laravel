<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>

    @seccion('yield')

    <p>Cadastro</p>

    <div class="container">
        <div class="row">
            <form action="/postsadd" method="POST">
                @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Salvar</button>
                    </div>
            </form>

        </div>
    </div>

    @secciodend





</body>
</html>
