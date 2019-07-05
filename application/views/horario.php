<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Horários</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link href="/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- menu -->
    <div id="menu" class="col-md-12 text-right">
      <div class="container">
          <a class="btn btn-primary" href="<?php echo base_url('Horario/listar'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horários</a>
          <button class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar-check-o"></i> Novo Horário</button>
      </div>
    </div>
    <!-- menu -->


    <!-- container -->
      <div class="container">
       <div id="clockindex" class="col-sm-12 text-center">
         <i class="fa fa-calendar-plus-o icon-clock-index animated infinite pulse" aria-hidden="true"></i>
       </div>
       <div id="mynew" class="col-sm-12">
          
       </div>
      </div>
    <!-- container -->



<!-- modal novo horario -->
<div class="modal fade animated bounceInLeft" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cancel-new" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Novo Horário</h4>
      </div>
      <div class="modal-body">
        
         <form id="horariofrm">
            <label>Nome da Turma:</label>
            <input class="form-control" type="text" name="nombre" >
            <label>Descrição da Turma:</label>
            <textarea class="form-control" name="descripcion" rows="3"></textarea>
            <label>Dias:</label>
            <div id="days-list" class="col-sm-12">
               <a data-day="1" class="day-option">Segunda</a>
               <a data-day="2" class="day-option">Terça</a>
               <a data-day="3" class="day-option">Quarta</a>
               <a data-day="4" class="day-option">Quinta</a>
               <a data-day="5" class="day-option">Sexta</a>
               <a data-day="6" class="day-option">Sábado</a>
               <a data-day="7" class="day-option">Domingo</a>
            </div>
            <input id="days-chose" class="form-control" type="text" name="days" >
            <label>Inicio:</label>
            <input class="form-control" type="text" id="time1" name="tiempo1">
            <label>Final:</label>
            <input class="form-control" type="text" id="time2" name="tiempo2">
            <label>Dividir Entre:</label>
            <select class="form-control" name="minutos">
                <option></option>
                <option value="35">35 Minutos</option>
                <option value="45">45 minutos</option>
                <option value="60">1 Hora</option>
            </select>
         </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="create-horario btn btn-success"><i class="fa fa-calendar-check-o"></i> Criar</button>
        <button type="button" class="cancel-new btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal novo horario -->

    
<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Adicionar Disciplina</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Disciplina</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Cor:</label>
           <select class="form-control" id="idcolortask">
              <option value="red-label">Vermelho</option>
              <option value="blue-label">Azul</option>
              <option value="green-label">Verde</option>
           </select> 
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Salvar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->




<!-- alert danger -->
<div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
<!-- alert danger -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- script -->
    <script src="js/script.js"></script>

  </body>
</html>