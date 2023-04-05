<?php
include_once("../header.php");
include_once("../db.php");
?>


	<div class="main-wrapper">
		
	
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Produtos</h4> <a href="product/add.php" class="btn btn-primary float-right veiwbutton">Add Produtos</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
									<thead>
									<tr>
									<th> # </th>
									<th> Cod</th>
									<th> Nome </th>
									
									<th> Preço</th>
								
									<th> Acção </th>
									</tr> 
								</thead>
										
										<?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
							/* PDO
								$stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
								$stmt->execute();
								$values = $stmt->fetchAll();
								
								foreach($values as $value) {
							*/	
											
							?>	
					  
                    <tbody>
					
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['cod'] ?> </td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['price'] ?></td>
                          
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
						  <a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
					</tr>
						<?php  }?>	
					</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>




	<?php
include_once("../footer.php");?>