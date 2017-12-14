<?php
require_once ('includes/conexao.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Contato | José Guilherme Sório</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<nav class="navbar-nav navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-target="#menu" data-toggle="collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">José Guilherme Sório</a>
			</div>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">HOME</a></li>
					<li><a href="">SOBRE</a></li>
					<li><a href="">SERVIÇOS</a></li>
					<li class="active"><a href="">CONTATO</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container info">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="page-header">
					<h3>Quem Sou</h3>
				</div>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<td><span><b>Nome: </b></span>José Guilherme Sório</td>
						</tr>
						<tr>
							<td><span><b>Email: </b></span>joseguilherme.sorio@yahoo.com</td>
						</tr>
						<tr>
							<td><span><b>Telefone: </b></span>(11) 96465-2489</td>
						</tr>
						<tr>
							<td><span><b>Endereço: </b></span>Av. Padre Arlindo Vieira, 3175</td>
						</tr>
						<tr>
							<td><span><b>Skills </b></span>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							    <span>HTML</span><span class="sr-only">80% Complete</span>
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							    <span>CSS</span><span class="sr-only">80% Complete</span>
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span>PHP</span><span class="sr-only">40% Complete</span>
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							    <span>JAVASCRIPT</span><span class="sr-only">50% Complete</span>
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							    <span>JQUERY</span><span class="sr-only">50% Complete</span>
							  </div>
							</div>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="page-header">
					<h3>Me Contate</h3>
				</div>
					<form action="" method="post" class="form-horizontal">
						<div class="form-group">
							<div class=" col-xs-1 col-sm-1">
								<span style="font-size: 16px; margin: 10px 0 0 20px;" class="glyphicon glyphicon-user"></span>
							</div>
							<div class="col-xs-11 col-sm-10">
								<input type="text" name="nome" class="form-control" placeholder="Informe seu nome..." required="required">
							</div>
						</div>
						<div class="form-group">
							<div class=" col-xs-1 col-sm-1">
								<span style="font-size: 16px; margin: 10px 0 0 20px;" class="glyphicon glyphicon-envelope"></span>
							</div>
							<div class="col-xs-11 col-sm-10">
								<input type="text" name="email" class="form-control" placeholder="Informe seu email..." required="required">
							</div>
						</div>
						<div class="form-group">
							<div class=" col-xs-1 col-sm-1">
								<span style="font-size: 16px; margin: 10px 0 0 20px;" class="glyphicon glyphicon-earphone"></span>
							</div>
							<div class="col-xs-11 col-sm-10">
								<input type="text" name="telefone" class="form-control" placeholder="Informe seu telefone..." required="required">
							</div>
						</div>
						<div class="form-group">
							<div class=" col-xs-1 col-sm-1">
								<span style="font-size: 16px; margin: 10px 0 0 20px;" class="glyphicon glyphicon-map-marker"></span>
							</div>
							<div class="col-xs-11 col-sm-10">
								<input type="text" name="endereco" class="form-control" placeholder="Informe seu endereço..." required="required">
							</div>
						</div>
						<div class="form-group">
							<div class=" col-xs-1 col-sm-1">
								<span style="font-size: 16px; margin: 10px 0 0 20px;" class="glyphicon glyphicon-list"></span>
							</div>
							<div class="col-xs-11 col-sm-10">
								<select name="tipo_contato" class="form-control" required="required">
									<option disabled="disabled" selected="selected">Informe o tipo de contato</option>
									<option>Freelancer</option>
									<option>Contato</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class=" col-xs-12 col-sm-12">
								<button class="btn btn-danger" name="btn_enviar">Enviar Contato</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Ver Cadastros</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Contatos Recebidos até <?php echo date('d-M-Y'); ?></h4>
			      </div>
			      <div class="modal-body">
			        
			        <div class="table-responsive">
			        	<table class="table table-bordered">
			        		<?php 
			        		$sql = "SELECT * FROM cadastros";
			        		?>
			        		<thead>
			        			<tr>
				        			<th>Nome</th>
				        			<th>Email</th>
				        			<th>Telefone</th>
				        			<th>Endereço</th>
				        			<th>Tipo_contato</th>
			        			</tr>
			        		</thead>
			        			<?php 
				        			$res = $con->query($sql);
				        			while($row = $res->fetch_assoc()){
			        			?>
			        		<tbody>
			        			
			        			<tr>
			        				<td><?php echo $row['nome']; ?></td>
			        				<td><?php echo $row['email']; ?></td>
			        				<td><?php echo $row['telefone']; ?></td>
			        				<td><?php echo $row['endereco']; ?></td>
			        				<td><?php echo $row['tipo_contato']; ?></td>
			        			</tr>
			        		</tbody>
			        		<?php  } ?>
			        	</table>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			


		</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
  		$('#myInput').focus()
	});
</script>
</body>
</html>

<?php
include "includes/conexao.php";

if(isset($_POST['btn_enviar'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$end = $_POST['endereco'];
	$tipo_contato = $_POST['tipo_contato'];

	$query = mysqli_query($con,"INSERT INTO cadastros(nome,email,telefone,endereco,tipo_contato) VALUES('$nome','$email','$telefone','$end','$tipo_contato')");

	if($query){
		echo '<div class="alert alert-success" style="position:absolute; top:50px; width:100%;">Seus dados foram enviados com sucesso!</div>';
	}else{
		echo '<div class="alert alert-danger" style="position:absolute; top:50px; width:100%;">Ocorreu um erro ao processar suas informacoes. :(</div>';
	}
}
?>