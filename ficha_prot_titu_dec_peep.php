<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt_BR">
<head>
	<meta http-equiv="X-UA-Compatible"  />
	<meta name="robots" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	
	<script type="text/javascript" src="../../../js/bibliotecas/prototype.js"></script>
	<script type="text/javascript" src="../../../js/bibliotecas/scriptaculous.js"></script>

	<script type="text/javascript" language="JavaScript" src="../../../js/funcoes_comuns.js"></script>
	
	<script type="text/javascript" src="../../../js/funcoes_tela_atendimento.js"></script>
		
	<script type="text/javascript" language="JavaScript" src="../../../js/funcoes_mouse.js"></script>
	<script type="text/javascript" language="JavaScript" src="../../../js/funcoes_js_B.js"></script>
	<script type="text/javascript" language="JavaScript" src="../../../js/main_B.js"></script>




	<link rel="stylesheet" type="text/css" href="../../../css/estilo_leito_B.css" />
	<link rel="stylesheet" type="text/css" href="../../../css/atendimentoIE.css" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/sipec/plugins/fontawesome-free/css/all.min.css">
	<!-- sweetalert2 -->
	<link rel="stylesheet" href="/sipec/plugins/sweetalert2/sweetalert2.min.css">
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	 

	<!-- Theme style -->
	<link rel="stylesheet" href="/sipec/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="/sipec/dist/css/adminlte-custom-siint.css">
  
  	<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-select.css" />
	
	<style>
		#titulo_dados{
			font: 8pt;
			font-weight: bold;
		}

		.btn-primary {
			background-color: #8C4646;
			border-color: #8C4646
		}

		.wrapper {
		
		  background-color: #f4f6f9;
		  text-align:left !important;
		  margin:0!important;
			width:100%;
		}
		
		.content-wrapper{
	
			display:flex;
			flex-direction:column;
			align-items:center;
			margin:0!important;
			height:auto!important;
		}
	


		.card-primary.card-outline {
			border-top: 3px solid #8C4646 ;  !important;
			display: flex;
		}
		
		.ponteiro{
			
			cursor:pointer;
			
		}
		
	
	h3:hover{
	
	  opacity: 0.7;
	  color: 8C4646;
	
	}
	  
	 
  

				
	</style>
	
	
</head>
<!-- sidebar-mini sidebar-collapse-->

<div class="wrapper">
   <div class="content-wrapper">
				<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<input type="hidden" name="acao" id="acao" value=""/>
					<div class="row mb-4">
						<div class="col-sm-12">
							<div class="titulo"></br></br></br>
								<h1 style="float:left;">PROTOCOLO DE TITULAÇÃO DECRESCENTE DE PEEP</h1>
							</div> 	
						</div>
					</div>
				</div>
			</section>
	    <div id="container" style="margin-top: -10px; width:75%;">
				<form id="form1" name="form1" method="post" action="....">
					<input type="hidden" id="div_item" name="div_item" value="">
					<section class="content">
						<div class="container-fluid">
							<div class="row">
							
								<div class="col-12">
									<div class="card card-primary card-outline">
										<div class="card-header">
											<h3 class="card-title">
												<i class="fas fa-edit"></i>
												<b>DADOS DA INTERNAÇÃO</b>
											</h3>
										</div>
										<div class="card-body pad">
											<div class="row clearfix">
												<table id="formularios" cellpadding="5">
												<tr>
														<td><b>Data Da Internação: </b><?php echo $data_internacao;?> </td>
														<td><b>Cartão Do Sus:</b><?php echo $CNS;?>&nbsp;&nbsp;&nbsp;</td>
														<td><b>CNES :</b> 2288338</td>
													</tr>
													
												</table>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					</section>	
					
				
               
             <section class="content">	
				   <div class="col-12">
							<div class="card card-outline card-primary collapsed-card">
								<div class="card-header ponteiro" data-card-widget="collapse">
									<h3 class="card-title">
										<i class="fas fa-edit"></i><b>
										Informações do procedimento </b>
									</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
											<i class="fas fa-plus"></i>
										</button>
									 </div>
										
								    </div>
										<div class="card-body pad">
											<div class="row clearfix">
												<table id="formularios" cellpadding="5">
												<tr> 
													<td colspan=2>
													<b>Data da IOT&nbsp;</b><input type="date" id="data_iot_peep" name="data_iot_peep"value=""/>&nbsp;&nbsp;
														<b>Supina&nbsp;</b><input type="radio" id="supina_peep" name="" value="supina_peep"/> &nbsp;&nbsp;
														<b>Prona&nbsp;<b><input type="radio" id="prona_peep" name="prona_peep" value=""/> &nbsp;&nbsp;
														<b>IMC:&nbsp;</b><input type="text" id="imc_peep" name="imc_peep" value=""SIZE="5"/> kg/m2</td> 
                                                  	</tr>
												
													
													<tr>
												<td>
												<b> animas </b>
													<input type="radio" id="animas_s" name="animas" value="s"/>&nbsp;Sim&nbsp;
													<input type="radio" id="animas_n" name="animas" value="n"/>&nbsp;Não&nbsp;
													<b>
													<b>Titulação nº&nbsp;</b><input type="text" id="titulação_n" name="titulação_n" value=""/> 
                                                  	
												 </td>
													</tr>
													
													
													
												</table>
									</div>
								</div>
							</div>
						</div>
					</section>
				
		

                 <section class="content">	
				   <div class="col-12">
							<div class="card card-outline card-primary collapsed-card">
								<div class="card-header ponteiro" data-card-widget="collapse">
									<h3 class="card-title">
										<i class="fas fa-edit"></i><b>
										Parâmetros ventilatórios </b>
									</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
											<i class="fas fa-plus"></i>
										</button>'
									 </div>
										
								    </div>
								  
											<div class="card-body pad">
												<div class="row clearfix">
													<table id="formularios" cellpadding="5">
															           
														
													  <table class="table table-hover"/>
															
															<thead>
															  <tr>
																<th></th>
																<th>Modo</th>
																<th>Ppico</th>
																<th>FR</th>
																<th>PEEP</th>
																<th>FiO2</th>
																<th>Vt</th>
																<th>Dp</th>
																
															  </tr>
															</thead>
															
															<tbody> <tr>
																<td> Pré-Titulação</td>
																<td> <input type="text" id="pv_dec_peep_modo" name="pv_dec_peep_modo"  value=""SIZE="5"/></td>
																<td> <input type="text" id="pv_dec_peep_ppico"name="pv_dec_peep_ppico"  value=""SIZE="5"/></td>
																<td> <input type="text" id="pv_dec_peep_fr"name="pv_dec_peep_fr"  value=""SIZE="5"/></td>
																<td> <input type="text" id="pv_dec_peep_peep"name="pv_dec_peep_peep" value=""SIZE="5"/></td>
																<td> <input type="text" id="pv_dec_peep_fio2"name="pv_dec_peep_fio2" value=""SIZE="5"/></td>
																<td> <input type="text" id="pv_dec_peep_vt"name="pv_dec_peep_vt" value=""SIZE="5"/></td>
															    <td> <input type="text" id="pv_dec_peep_driving"name="pv_dec_peep_driving"  value=""SIZE="5"/></td>
																</tr>
															</tbody>
															
															<tbody> <tr>
															   
															   <td> Pós-Titulação</td>
																<td> <input type="text" id="dec_peep_pos_modo" name="dec_peep_pos_modo"  value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_ppico" name="dec_peep_pos_ppico" value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_fr" name="dec_peep_pos_fr"  value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_peep" name= "dec_peep_pos_peep" value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_fio2" name="dec_peep_pos_fio2"  value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_vt" name="dec_peep_pos_vt" value=""SIZE="5"/></td>
																<td> <input type="text" id="dec_peep_pos_driving" name="dec_peep_pos_driving"  value=""SIZE="5"/></td>
															
															  </tr>
															  
															  
															</tbody>
															
															  
															
															  <table class="table table-hover"/>
															<thead><b>Gasometria:</b>
															  <tr>
																<td></td>
																<th>pH</th>
																<th>PCO2</th>
																<th>PaO2</th>
																<th>SHCO3</th>
																<th>BE</th>
																<th>Lac</th>
																<th>SpO2</th>
																<th>P/F</th>
																
															  </tr>
															</thead>
															
															<tbody><tr>
														<tbody> <tr>
																<td> Pré-Titulação</td>
																<td> <input type="text" id="gas_dec_peep_pre_ph"  name="gas_dec_peep_pre_ph"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_PCO2"  name="gas_dec_peep_pre_PCO2"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_PaO2" name="gas_dec_peep_pre_PaO2"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_SHCO3" name="gas_dec_peep_pre_SHCO3" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_be" name="gas_dec_peep_pre_be"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_lac" name="gas_dec_peep_pre_lac"  value=""SIZE="5"/></td>
															    <td> <input type="text" id="gas_dec_peep_pre_spo2" name="gas_dec_peep_pre_spo2"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pre_pf" name="gas_dec_peep_pre_pf" value=""SIZE="5"/></td>
																
																</tr>
															</tbody>
															
															<tbody> <tr>
															   
															   <td> Pós-Titulação</td>
																<td> <input type="text" id="gas_dec_peep_pos_ph"  name="gas_dec_peep_pos_ph" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_PCO2" name="gas_dec_peep_pos_PCO2"  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_pao2" name="gas_dec_peep_pos_pao2" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_SHCO3" name="gas_dec_peep_pos_SHCO3" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_be"name="gas_dec_peep_pos_be" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_lac" name="gas_dec_peep_pos_lac" value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_spo2" name="gas_dec_peep_pos_spo2""  value=""SIZE="5"/></td>
																<td> <input type="text" id="gas_dec_peep_pos_pf" name="gas_dec_peep_pos_pf" value=""SIZE="5"/></td>
															   
																
															  </tr>
															  
															  
															</tbody>
															
															
														 
														   <table class="table table-hover"/>
															<thead><b>Titulação decrescente de PEEP:</b>
															  <tr>
																<th>PEEP(cmH2O)</th>
																<th>SpO2</th>
																<th>Ppico</th>
																<th>DeltaP(Ppico-PEEP)</th>
																<th>Pplatô</th>
																<th>Dp(Pplatô-PEEP)</th>
																<th>Melhor PEEP</th>
																
															  </tr>
															</thead>
															
														
														<tbody> <tr>
																<td> 20</td>
																<td> <input type="text" id="titu_decres_peep_spo_20" name="titu_decres_peep_spo_20" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_20" name="titu_decres_peep_ppico_20"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_20" name="titu_decres_peep_deltap_20"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_20" name="titu_decres_peep_pplato_20"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_dplato_20" name="titu_decres_peep_dplato_20"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_20" name="titu_decres_peep_melhorp_20"  value=""SIZE="5"/></td>
																
																
																</tr>
															</tbody>
															
															<tbody> <tr>
															   
															   <td> 18</td>
																<td> <input type="text" id="titu_decres_peep_spo_18" name="titu_decres_peep_18"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_18" name="titu_decres_peep_18"  value=""SIZE="5"/></td>
																<td> <input type="text" id= "titu_decres_peep_delta_18"name="titu_decres_peep_18"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_18" name="titu_decres_peep_18"  value=""SIZE="5"/></td>
																<td> <input type="text" id= "titu_decres_peep_pplato_18"name="titu_decres_peep_18"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_18" name="titu_decres_peep_18"  value=""SIZE="5"/></td>
															
																
															  </tr>
															  
															  
															</tbody>
															
																<tbody> <tr>
																<td> 16</td>
																<td> <input type="text" id="titu_decres_peep_spo_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_16" name="titu_decres_peep_16"  value=""SIZE="5"/></td>
																
																
																</tr>
															</tbody>
															
															<tbody> <tr>
															   
															   <td> 14</td>
																<td> <input type="text" id= "titu_decres_peep_spo_14"name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_14" name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_14" name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_14" name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_14" name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_14" name="titu_decres_peep_14"  value=""SIZE="5"/></td>
																
															  </tr>
															  
															  
															</tbody>
																<tbody> <tr>
																<td> 12</td>
															    <td> <input type="text" id="titu_decres_peep_spo_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_12" name="titu_decres_peep_12"  value=""SIZE="5"/></td>
																
																</tr>
															</tbody>
															
															<tbody> <tr>
															   
															   <td> 10</td>
																<td> <input type="text" id="titu_decres_peep_spo_10" name="titu_decres_peep_10"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_10" name="titu_decres_peep_10"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_10" name="titu_decres_peep_10"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_10"name="titu_decres_peep_10"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_10"name="titu_decres_peep_10"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_10" name="titu_decres_peep_10"  value=""SIZE="5"/></td>
															
																
															  </tr>
															  
															  
															</tbody>
																<tbody> <tr>
																<td> 8</td>
																<td> <input type="text" id="titu_decres_peep_spo_8" name="titu_decres_peep_spo_8" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_8" name="titu_decres_peep_ppico_8"value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_8"name="titu_decres_peep_delta_8" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_8" name="titu_decres_peep_deltap_8" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_8" name="titu_decres_peep_pplato_8" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_8" name="titu_decres_peep_melhorp_8" value=""SIZE="5"/></td>
																
																</tr>
															</tbody>
															
															<tbody> <tr>
															   <td> 6</td>
																<td> <input type="text" id="titu_decres_peep_spo_6"  name="titu_decres_peep_spo_6"  value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_ppico_6" name="titu_decres_peep_ppico_6" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_delta_6" name="titu_decres_peep_delta_6" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_deltap_6" name="titu_decres_peep_deltap_6" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_pplato_6" name="titu_decres_peep_pplato_6" value=""SIZE="5"/></td>
																<td> <input type="text" id="titu_decres_peep_melhorp_6"name="titu_decres_peep_melhorp_6"  value=""SIZE="5"/></td>
															
																
															  </tr>
															  
															  
															</tbody>
															
															
																
														</td>
													</tr>
															
															
															
														 
														</div>
													</table>
													
													<tr>
												<td>
											<b>Melhor PEEP:&nbsp;</b><input type="text" id="_dec_Melhor_peep" name="dec_Melhor_peep" value=""/>&nbsp;&nbsp;cmH2O&nbsp;&nbsp;&nbsp;
											<b>Melhor Pins (Delta P):&nbsp;</b><input type="text" id="dec_melhor_pins_dp" name="dec_melhor_pins_dp" value=""/> &nbsp;&nbsp;cmH2O
												<td></tr>			
														
												</div>
											</div>	 
								</div>
								
						</div>
					
					</section> 	
				

				 


                <section class="content">	
				   <div class="col-12">
							<div class="card card-outline card-primary collapsed-card">
								<div class="card-header ponteiro" data-card-widget="collapse">
									<h3 class="card-title">
										<i class="fas fa-edit"></i><b>
										OBSERVAÇÔES </b>
									</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
											<i class="fas fa-plus"></i>
										</button>
									 </div>
										<!-- /.card-tools -->
									<!-- /.card-tools -->
								    </div>
								  <!-- /.card-header -->
											<div class="card-body pad">
												<div class="row clearfix">
													<table id="formularios" cellpadding="5">
														<tr>
															<td>
																
														 
																<!--<td><div id="obs_peep" style="display: none"></td>-->

																<textarea id="obs_peep" 
																name="obs_dec_peep" 
																style="width:580%;height:100px" 
																onKeyDown="maxLength('obs_dec_peep', 1000);" 
																onKeyUp="maxLength('obs_peep',8000);return verificaCaracteresRestantes(this.value,'caracteres_restantesEnc');"></textarea>
															</td>
														</tr>

														
													</table>
														
												</div>
											</div>	 
								</div>
								
						</div>
					
					</section>               
		          
	 <div style="text-align:center">

						<?php if($valor2['finalizado']!="S"){ ?>
						<button class="btn btn-primary btn-sm" name="" id="" onclick="javascript: validaForm('incluido');" />Salvar</button>

						<button class="btn btn-primary btn-sm" name="" id="" onclick="javascript:var sn = confirm ('Tem certeza que finalizar o preenchimento desse formulário?\n Após a finalização não será possível alteração!');
									if (sn == false){
										return false;
									}  validaForm('finalizado');" />Finalizar</button>
							<?php }else{ ?>
									<button class="btn btn-primary btn-sm" name="RetificarAvaliacao_nutricional" id="RetificarAvaliacao_nutricional"  >Retificar</button>
							<?php }?>

						<button title="Fechar Tela"  class="btn btn-primary btn-sm" onclick="javascript:window.close();"/>Fechar</button>
					</div>
      
	  

           </form>
</div>
       </div>
	   

<div id="telas"></div>
	<!-- jQuery -->
	<script src="/sipec/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="/sipec/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="/sipec/plugins/chart.js/Chart.min.js"></script>
	<!-- sweetalert2 -->
	<script src="/sipec/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/sipec/dist/js/adminlte.min.js"></script>

	<script type="text/javascript" src="../../../seg/js/jquery-1.11.0.min.js" language="JavaScript"></script>

	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/bootstrap-select.js"></script>

	<!-- JQuery DataTable Css -->
	<link href="/sipec/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
		
	<link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="/sipec/js/funcoes_comuns.js"></script>

	 <!-- Bootstrap DatePicker -->
	<link rel="stylesheet" href="/sipec/plugins/bootstrap/css/bootstrap-datepicker.css" type="text/css" />
	<script src="/sipec/plugins/bootstrap/js/bootstrap-datepicker.js" type="text/javascript"></script>
	  

	<script src="../../js/jquery.mask.js"></script>
	<script src="../../js/jquery.mask.min.js"></script>

	 <!-- Jquery DataTable Plugin Js -->
	<script src="/sipec/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="/sipec/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="/sipec/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>















</body>
  </html>