<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/base.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="css/shipmentRequests.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
	
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 mt-4 mb-4">
			
			<div class="container-fluid " id="headerSection">
				
				<div class="row">
					<div class="col-12 titlePage">
						<div class="row">
							<div class="col-4">
								<div class=" title">
									<h4>Solicitudes de Embarque</h4>
								</div>
							</div>
							<div class="col-7">

							</div>
							<div class="col-1">
								<div class=" notifications">
									<img src = "images/icons/notification.svg" id="iconNot" alt=""/>
								</div>								
							</div>
						</div>

						<div>

						</div>

					</div>
				</div>
			</div>




			<div class="container-fluid mt-4 mb-4" id="searchSectionShipmentResquests">
				
				<div class="row">
					<div class="col-8 search">
					   <div class="input-group">
					     
					      <input type="text" class="form-control" id="searchInputDpodsShipmentResquests" placeholder="Buscar">
					       <div class="input-group-text"><img src = "images/icons/search-normal.svg" id="iconSearch" alt=""/></div>
					    </div>
					</div>
					<div class="col-2 filters">
						<select class="form-select" aria-label="Default select example" id="filterTableShipmentResquests">
						  <option selected>Categoría</option>
						  <option value="1">Embarcador</option>
						  <option value="2">Transportista</option>
						  <option value="3">Destinatario</option>
						</select>
							<!-- <img src = "images/icons/arrow-3.svg" id="iconArrow" alt=""/> -->
					</div>
					<div class="col-2 mx-auto align-content-end justify-content-end">

						<button class=" btn primaryButton btn-blockdpo" id="">Cargar nuevo embarque<img src = "images/icons/add.svg" id="iconAdd" alt=""/></button>
						
					</div>										
				</div>
			</div>


			<div class="container-fluid mt-4 mb-4" id="">
				
				<div class="row justify-content-center">
					<div class="col-12 search">





						<table class="table  " id="ShipmentRequestsTable">
						  <thead>
						    <tr>
						      <th scope="col"><img src = "images/icons/24-support.svg"  alt=""/>  ID de envío</th>
						      <th scope="col"> <img src = "images/icons/user-octagon.svg"  alt=""/> Ref. Embarcador</th>
						      <th scope="col"><img src = "images/icons/user-tag.svg"  alt=""/>  Embarcador</th>
						      <th scope="col"><img src = "images/icons/truck-tick.svg"  alt=""/>  Transportista</th>
						      <th scope="col"> <img src = "images/icons/3d-cube-scan.svg"  alt=""/> Destinatario</th>
						      <th scope="col"> <img src = "images/icons/calendar.svg"  alt=""/>  Cita de carga</th>
						      <th scope="col" class="statusTh"><img src = "images/icons/status-up.svg"  alt=""/> Estatus</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdEntregado">Entregado</td>						      
						    </tr>
					    	<tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdSinAsignar">Entregado</td>						      
						    </tr>
						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdEntransito">Entregado</td>						      
						    </tr>
						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdNoConforme">Entregado</td>						      
						    </tr>		

						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdEntregado">Entregado</td>						      
						    </tr>
					    	<tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdSinAsignar">Entregado</td>						      
						    </tr>
						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdEntransito">Entregado</td>						      
						    </tr>
						    <tr>
						      <td>1234567890123456</td>
						      <td>1234567890123456</td>
						      <td>Embarcador de Confianza I</td>
						      <td>Transportes Rápidos S.A de C.V</td>
						      <td>Destinatario del Centro</td>
						      <td>12/Agosto/2023</td>	
						      <td class="statusTdNoConforme">Entregado</td>						      
						    </tr>						    				    
						  </tbody>
						</table>

					</div>	
					<div class="col-1 text-center">
						<!-- <img src = "images/icons/Group23.svg" id="iconAdd" alt=""/> -->
						
							
								
									

			
								
									

					</div>								
				</div>
			</div>




		</div>
	</div>
</div>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>