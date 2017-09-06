<?php 
include('header.php');
?>
<title>Tabla-JQUERY-JSON-PHP-BOOTSTRAP</title>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<?php include('container.php');?>
<div class="container">
	<h2>TABLA DE USUARIOS :D</h2>	
	<div class="row">
		
		<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Acciones</th>
                 <td>
<div class="btn-group">
<button type="button" class="btn btn-default btn" ng-click="edit($index);"><i class="glyphicon glyphicon-pencil"></i></button>
<button type="button" class="btn btn-default btn" ng-click="delete();"><i class="glyphicon glyphicon-trash"></i></button>
</div>
</td>
               
            </tr>
        </thead>
 
        
    </table>
	
		
	</div>
	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="#" title="">VOLVER</a>			
	</div>		
</div>
<?php include('footer.php');?>

