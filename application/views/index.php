<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Horários de Aulas</title>
  <link rel="stylesheet" type="text/css" href="styleLogin.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <div class="form-group">
    <h3>ENTRAR</h3>
    <form method="POST" action="<? php echo base_url('login'); ?>">
      <input type="text" class="form-control" id="matricula" placeholder="matricula" name="matricula" >

      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">

      <button type="submit" class="savetask btn btn-success">Acessar</button>
      <button type="submit" class="savetask btn btn-success">Cadastrar</button>
    </form>
  </div>

</body>
</html>