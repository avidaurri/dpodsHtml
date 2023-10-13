<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
			<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/style.css">
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
									<h4><img src = "images/icons/arrow-left.svg" id="" alt=""/>Ingresar datos del embarcador</h4>
								</div>
							</div>
							<div class="col-7">
								<div class="buttonsTitlePage ">
									<a class="linkButtom" href="">Guardar Borrador</a>
									<!-- <button type="button" class="btn btn-primary">Primary</button> -->
									<button class=" btn primaryButton align-middle" id="btnnextheader"> Siguiente <img src = "images/icons/arrow-right.svg" id="" alt=""/></button>										
								</div>
						
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
			
			<div class="container-fluid mt-4 mb-4" id="searchBar">
				
				<div class="row">
					<div class="col-5 search searchBarSection">
		   				<div class="input-group">
					     	<img src = "images/icons/24-support.svg" id="" alt=""/><label for="searchInputDpodsSearchBar">ID de envió</label>
					      	<input type="text" class="form-control" id="searchInputDpodsSearchBar" placeholder="">
					      	<img src = "images/icons/send-2.svg" id="" alt=""/>
					      	<img src = "images/icons/scan-barcode.svg" id="" alt=""/>
					       
					    </div>
					</div>
					<div class="col-6 filters searchBarSectionOpt ">
 						<p><img src = "images/icons/status-up.svg" id="" alt=""/> Estatus</p>
					</div>
					<div class="col-1 mx-auto align-content-end justify-content-end searchBarStatus">

						<p>Sin asignar</p>
						
					</div>										
				</div>
			</div>


			<div class="container-fluid mt-4 mb-4" id="tabsSectionFormDataRoles">
				
				<div class="row justify-content-center">
					<div class="col-12 ">



						<ul class="nav nav-tabs " id="ex1" role="tablist">
						  <li class="nav-item" role="presentation">
						    <a class="nav-link active" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true" > <img src = "images/icons/user-octagon_blue.svg"  alt=""/> Embarcador
						    </a
						    >
						  </li>
						  <li class="nav-item" role="presentation">
						    <a class="nav-link" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false" ><img src = "images/icons/truck-tick_blue.svg"  alt=""/>  Transportista
						    </a
						    >
						  </li>
						  <li class="nav-item" role="presentation">
						    <a class="nav-link" id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false" ><img src = "images/icons/3d-cube-scan_blue.svg"  alt=""/>  Destinatario
						    </a
						    >
						  </li>
						</ul>

						<div class="tab-content" id="ex1-content">
						  	<div class="tab-pane  fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1" >
								<div class="col-12 tab-panedpods" >
									<div class="row justify-content-center">
										<div class="col-11">
											<div class="row" id="formTop">
												<div class="col-12 titleTab mb-2">
													<h4 id="">Datos generales del embarcador  <img src = "images/icons/edit-2.svg"  alt=""/> </h4>
												</div>
												
												<div class="col-3">
													<label for="nombreEmbarcador">Nombre comercial del embarcador *</label>
													<select class="form-select formDpods formComponentBackground" aria-label="Default select example" id="nombreEmbarcador">
														<!-- 				  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>
												</div>
												<div class="col-3">
												 <label for="exampleFormControlInput1" class="form-label">No. de referencia del embarcador*</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >								
												</div>
												<div class="col-3">
													<label for="razonSocialEmbarcador">Razón social del ambarcador *</label>
													<select class="form-select  formDpods formComponentBackground" aria-label="Default select example" id="razonSocialEmbarcador">
														<!-- 			  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>								
												</div>
												<div class="col-3">
												 	<label for="exampleFormControlInput1" class="form-label">Cita de carga:</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >									
												</div>									
											</div>

											<div class="row mt-4 justify-content-between" id="formMidle">
												<div class="col-6 sectionFormBackground sectionFormBackgroundIzq">
													<div class="row">
														<div class="col-7">
															<p>Dirección de Origen:</p>
															<label for="exampleFormControlTextarea1" class="form-label">Dirección:</label>
			    											<textarea class="form-control formDpods formComponentBase" id="exampleFormControlTextarea1" rows="7" placeholder="Escriba la dirección de origen, nombre del lugar, calle número, colonia CP y municipio"></textarea>												
														</div>
														<div class="col-5 align-middle">
															<p>Datos de carga:</p>
															  	<label for="exampleFormControlInput1" class="form-label">Tipo de unidad:</label>
			  													<input type="text" class="form-control formDpods formComponentBase" id="exampleFormControlInput1">

															  	<label for="exampleFormControlInput1" class="form-label mt-2">Capacidad de unidad:</label>
			  													<input type="text" class="form-control formDpods formComponentBase" id="exampleFormControlInput1">

														</div>
													</div>		
												</div>
												<div class="col-6 sectionFormBackground sectionFormBackgroundDer">
													<div class="row">
														<form>
														  <div class="row">
														    <div class="col">
														    	<label for="exampleFormControlInput1" class="form-label">Nombre del contacto</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														    <div class="col">
														    	<label for="exampleFormControlInput1" class="form-label">Telefono</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														  </div>
														</form>

													</div>
													<div class="row pt-4">
														<label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
														<input type="text" class="form-control formDpods formComponentBase" placeholder="">
													</div>
												</div>
											</div>

											<div class="row mt-4 justify-content-between" id="formButtn">
												

												<div class="col-4">
													<p>Documentos a firmar <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3" data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>


													<!-- <br> -->
													 <!-- <img src = "images/icons/Group83.svg"  alt=""/>  -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<!-- <img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt=""> -->
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>


													 <!-- <br> -->
													 <span>Asegurece de firmar los documento</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
													<p>Fotografía de la mercancia <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3" data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>
													<!-- <br> -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt="">
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>
													 <!-- <br> -->
													 <span>Fotografías antes de cerrar la caja</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
													<p>Fotografía del sello <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3" data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>
													<!-- <br> -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt="">
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>
													 <!-- <br> -->
													 <span>Fotografías del sello de seguridad</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>
												

											</div>

										</div>

									</div>
								</div>	
						  	</div>
						  	<div class="tab-pane  fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
								<div class="col-12 tab-panedpods" >
									<div class="row justify-content-center">
										<div class="col-11">
											<div class="row" id="formTop">
												<div class="col-12 titleTab mb-2">
													<h4 id="">Datos generales del transportista  <img src = "images/icons/edit-2.svg"  alt=""/> </h4>
												</div>
												
												<div class="col-3">
													<label for="nombreEmbarcador">Razón social del transportista:</label>
													<select class="form-select formDpods formComponentBackground" aria-label="Default select example" id="nombreEmbarcador">
														<!-- 				  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>
												</div>
												<div class="col-3">
												 <label for="exampleFormControlInput1" class="form-label">No. de referencia del transportista:</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >								
												</div>
												<div class="col-3">
													<label for="razonSocialEmbarcador">Nombre del operador:*</label>
													<select class="form-select  formDpods formComponentBackground" aria-label="Default select example" id="razonSocialEmbarcador">
														<!-- 			  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>								
												</div>
												<div class="col-3">
												 	<label for="exampleFormControlInput1" class="form-label">Telefono del operador:*</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >									
												</div>									
											</div>

											<div class="row mt-4 justify-content-between" id="formMidle">
												<div class="col-6  sectionFormBackgroundIzq">
													<div class="row">
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Eco. tractor:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Placas tractor:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>	
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Eco. remolque 1:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Placas remolque 1:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Eco. remolque 2:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>
														<div class="col-6 align-middle">
														  	<label for="exampleFormControlInput1" class="form-label">Placas remolque 2:*</label>
		  													<input type="text" class="form-control formDpods formComponentBackground" id="exampleFormControlInput1">
														</div>																																									
													</div>		
												</div>
												<div class="col-6 sectionFormBackground sectionFormBackgroundDer">
													<div class="row">
														<form>
														  <div class="row">
														  	<p>Contacto del transportista:</p>
														    <div class="col-6">
														    	<label for="exampleFormControlInput1" class="form-label">Nombre comenrcial del transportista</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														    <div class="col-6">
														    	<label for="exampleFormControlInput1" class="form-label">Nombre de contacto</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														    <div class="col-6">
														    	<label for="exampleFormControlInput1" class="form-label">Teléfono</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														    <div class="col-6">
														    	<label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>														    
														  </div>
														</form>

													</div>
	
												</div>
											</div>

											<div class="row mt-4 justify-content-between" id="formButtn">
												

												<div class="col-4">
													<p>Detalle de la mercancia <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3"  data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>
													<!-- <br> -->
													 <!-- <img src = "images/icons/Group83.svg"  alt=""/>  -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<!-- <img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt=""> -->
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>


													 <!-- <br> -->
													 <span>Compartir datos para CCP</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
													<p>Complemento carta porte <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3"  data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>
													<!-- <br> -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<!-- <img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt=""> -->
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>
													 <!-- <br> -->
													 <span></span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
													<p>Comentarios <span>(Opcional)*</span> </p>
			    									<textarea class="form-control formDpods formComponentBackground" id="exampleFormControlTextarea1" rows="2" placeholder="Escriba sus comentarios aquí"></textarea>	
													<!-- <br> -->
													 <div class="row ">
													 	<div class="col-6 align-middle pt-3">
													 		<p>Maniobras: <span>(Opcional)*</span> </p>
													 		<span>Agregar autorización y/o comprobante</span>
													 	</div>
													 	<div class="col-6 sectionChargeImages">

													 	</div>
													 </div>
													 <!-- <br> -->
													 <span></span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>
												

											</div>

										</div>
						    		</div>
						    	</div>
						  	</div>
						  	<div class="tab-pane  fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
								<div class="col-12 tab-panedpods" >
									<div class="row justify-content-center">
										<div class="col-11">
											<div class="row" id="formTop">
												<div class="col-12 titleTab mb-2">
													<h4 id="">Datos generales del destinatario  <img src = "images/icons/edit-2.svg"  alt=""/> </h4>
												</div>
												
												<div class="col-3">
													<label for="nombreEmbarcador">Nombre comercial del destinatario *</label>
													<select class="form-select formDpods formComponentBackground" aria-label="Default select example" id="nombreEmbarcador">
														<!-- 				  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>
												</div>
												<div class="col-3">
												 <label for="exampleFormControlInput1" class="form-label">Razón social del destinatario*</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >								
												</div>
												<div class="col-3">
													<label for="razonSocialEmbarcador">No de referencia del destinatario *</label>
													<select class="form-select  formDpods formComponentBackground" aria-label="Default select example" id="razonSocialEmbarcador">
														<!-- 			  <option selected>Open this select menu</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													  <option value="3">Three</option> -->
													</select>								
												</div>
												<div class="col-3">
												 	<label for="exampleFormControlInput1" class="form-label">Cita de carga:</label>
												  <input type="text" class="form-control  formDpods formComponentBackground" id="exampleFormControlInput1" >									
												</div>									
											</div>

											<div class="row mt-4 justify-content-between" id="formMidle">
												<div class="col-6 sectionFormBackground sectionFormBackgroundIzq">
													<div class="row">
														<div class="col-12">
															<p>Dirección de destino:</p>
															<label for="exampleFormControlTextarea1" class="form-label">Dirección:</label>
			    											<textarea class="form-control formDpods formComponentBase" id="exampleFormControlTextarea1" rows="7" placeholder="Escriba la dirección de origen, nombre del lugar, calle número, colonia CP y municipio"></textarea>												
														</div>

													</div>		
												</div>
												<div class="col-6 sectionFormBackground sectionFormBackgroundDer">
													<p>Contacto del destino:</p>
													<div class="row">
														<form>
														  <div class="row">
														    <div class="col">
														    	<label for="exampleFormControlInput1" class="form-label">Nombre del contacto</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														    <div class="col">
														    	<label for="exampleFormControlInput1" class="form-label">Telefono</label>
														      <input type="text" class="form-control formDpods formComponentBase" placeholder="">
														    </div>
														  </div>
														</form>

													</div>
													<div class="row pt-4">
														<label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
														<input type="text" class="form-control formDpods formComponentBase" placeholder="">
													</div>
												</div>
											</div>

											<div class="row mt-4 justify-content-between" id="formButtn">
												

												<div class="col-4">
													<p>Documentos a firmar <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3">Firmar  <img src = "images/icons/edit-2_white.svg"  alt=""/></button>
													<!-- <br> -->
													 <!-- <img src = "images/icons/Group83.svg"  alt=""/>  -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<!-- <img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt=""> -->
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>


													 <!-- <br> -->
													 <span>Asegurece de firmar los documento</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
															<br>
													<br>
													<p>Comentarios <span>(Opcional)*</span> </p>
													<!-- <button class="btn greenButton align-middle mb-3">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button> -->
											
													<br>
													 <div class="row ">
													 	<div class="col-12 ">
			    											<textarea class="form-control formDpods formComponentBackground" id="exampleFormControlTextarea1" rows="6" placeholder="Escriba sus comentarios aquí"></textarea>	
													 	</div>
													 </div>
													 <!-- <br> -->
													 <span>Fotografías antes de cerrar la caja</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>

												<div class="col-4">
													<p>Fotografías de evidencia <span>(Opcional)*</span> </p>
													<button class="btn greenButton align-middle mb-3"  data-bs-toggle="modal" data-bs-target="#cargaDocumentoModal">Cargar archivos <img src = "images/icons/add.svg"  alt=""/></button>
													<!-- <br> -->
													 <div class="row ">
													 	<div class="col-12 sectionChargeImages">
													 		<div class="row">
															 	<div class="col-3">
															 		<!-- <img class="prevImg" src="images/icons/Rectangle56.svg" style="width: 180px;"  class="img-fluid" alt=""> -->
															 	</div>										 			
													 		</div>
													 	</div>
													 </div>
													 <!-- <br> -->
													 <span>Fotografías del sello de seguridad</span>  <img src = "images/icons/ph_question.svg"  alt=""/>
												</div>
												

											</div>

										</div>
						    		</div>
						    	</div>
						  	</div>
						</div>



					</div>


						



				</div>
			</div>




		</div>
	</div>
</div>

<div class="modal fade" id="cargaDocumentoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
<!--       <div class="modal-header">
 		       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
        <h4>Carta complemento carta porte</h4>
        <p>Tome una fotografía con su dispositivo ó seleccionar un archivo</p>

      <div class="row">
      	<div class="col-6">
      		<button class=" btn primaryButton btn-blockdpo btndpodlg" id=""> Fotografía <img src = "images/icons/camera.svg" id="iconAdd" alt=""/></button>

      	</div>
      	<div class="col-6">
      		<button class=" btn greenButton btn-blockdpo btndpodlg" id=""> Archivo <img src = "images/icons/direct-send.svg" id="iconAdd" alt=""/></button>
      	</div>
      </div>

      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->

    </div>
  </div>
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>