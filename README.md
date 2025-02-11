


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt_BR">
 <head>
	<meta http-equiv="X-UA-Compatible"  />
	<meta name="robots" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
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
    border-color: #8C4646;
}

.wrapper {
    background-color: #f4f6f9;
    text-align: left !important;
    margin: 0!important;
    width: 100%;
}

.content-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0!important;
    height: auto!important;
}

.card-primary.card-outline {
    border-top: 3px solid #8C4646 !important;
    display: flex;
}

.ponteiro {
    
 
cursor: pointer;
}

h3:hover {
    opacity: 0.7;
    
    col
color: #8C4646; /* Adicionado o # para a cor hexadecimal */
}
</style>
	
  </head>

<body>

<form  name="ficha_prot_titu_dec_peep" id="ficha_prot_titu_dec_peep" method="post" action="insere_prot_titu_dec_peep.php">
<div class="wrapper">
    <div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<input type="hidden" name="acao" id="acao" value="<?=$acao?>"/>
					<input type="hidden" name="id_form" id="id_form" value="<?=$id_form?>"/>
					
					
					<input type="hidden" name="internacao_id" id="internacao_id" value="<?=$internacao_id?>"/>
					<input type="hidden" name="cod_func" id="cod_func" value="<?=$cod_func?>"/>
					<input type="hidden" name="cod_espec" id="cod_espec" value="<?=$cod_espec?>"/>
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
				<form id="form1" name="form1" method="post" action="...">
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
													<td><a id="titulo_dados">Nome: </a><?=$paciente;?></td>
													<td><a id="titulo_dados">Registro: </a><?=$prontuario; ?></td>
													<td><b>Data Da Internação: </b><?php echo $datainternacao;?> </td>
													<td><b>Cartão Do Sus:</b></td>
													<td><b>CNES :</b> </td>
													</tr>
													
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</section>	
	
	
					<form id="form1" name="form1" method="post" action="insere_prot_titu_dec_peep.php">
							 
							<section class="content">
								<div class="col-12">
									<div class="card card-outline card-primary collapsed-card">
										<div class="card-header ponteiro" data-card-widget="collapse">
											<h3 class="card-title">
												<i class="fas fa-edit"></i><b> Informações do Procedimento </b>
											</h3>
											<div class="card-tools">
												<button type="button" class="btn btn-tool" data-card-widget="collapse">
													<i class="fas fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="card-body pad">
											<div class="row">
												<div class="col-12">
												   
														<div class="mb-3">
															<label for="peep_data_iot"><b>Data da IOT</b></label>
															<input type="date" id="peep_data_iot" name="peep_data_iot" class="form-control" />
														</div>
														<div class="mb-3">
															<b>Posição:</b>
															<div class="form-check form-check-inline">
																<input type="radio" id="peep_supina" name="peep_posicao" value="S" class="form-check-input" />
																<label for="peep_supina" class="form-check-label">Supina</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="radio" id="peep_prona" name="peep_posicao" value="P" class="form-check-input" />
																<label for="peep_prona" class="form-check-label">Prona</label>
															</div>
														</div>
														<div class="mb-3">
															<label for="peep_imc"><b>IMC:</b></label>
															<input type="text" id="peep_imc" name="peep_imc" class="form-control" size="5" /> kg/m²
														</div>
														<div class="mb-3">
															<b>Animais:</b>
															<div class="form-check form-check-inline">
																<input type="radio" id="peep_animas_s" name="peep_animas" value="s" class="form-check-input" />
																<label for="peep_animas_s" class="form-check-label">Sim</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="radio" id="peep_animas_n" name="peep_animas" value="n" class="form-check-input" />
																<label for="peep_animas_n" class="form-check-label">Não</label>
															</div>
														</div>
														<div class="mb-3">
															<label for="peep_titulacao_num"><b>Titulação nº:</b></label>
															<input type="text" id="peep_titulacao_num" name="peep_titulacao_num" class="form-control" />
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
                                        <i class="fas fa-edit"></i><b> Parâmetros ventilatórios </b>
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body pad">
                                    <div class="row clearfix">
                                        <table class="table table-hover">
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
                                            <tbody>
                                                <tr>
                                                    <td>Pré-Titulação</td>
                                                    <td><input type="text" id="peep_pre_modo" name="peep_pre_modo" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_ppico" name="peep_pre_ppico" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_fr" name="peep_pre_fr" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_peep" name="peep_pre_peep" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_fio2" name="peep_pre_fio2" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_vt" name="peep_pre_vt" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pre_driving" name="peep_pre_driving" value="" size="5" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Pós-Titulação</td>
                                                    <td><input type="text" id="peep_pos_modo" name="peep_pos_modo" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_ppico" name="peep_pos_ppico" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_fr" name="peep_pos_fr" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_peep" name="peep_pos_peep" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_fio2" name="peep_pos_fio2" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_vt" name="peep_pos_vt" value="" size="5" /></td>
                                                    <td><input type="text" id="peep_pos_driving" name="peep_pos_driving" value="" size="5" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
										
								<table class="table table-hover">
										<thead>
										<tr>
										<th colspan="7"><b>Titulação decrescente de PEEP:</b></th>
										</tr>
										<tr>
										<th>PEEP (cmH2O)</th>
										<th>SpO2</th>
										<th>Ppico</th>
										<th>DeltaP (Ppico-PEEP)</th>
										<th>Pplatô</th>
										<th>Dp (Pplatô-PEEP)</th>
										<th>Melhor PEEP</th>
										</tr>


																				</thead>
										<tbody>
										<tr>
										<td>20</td>
										<td><input type="text" id="peep_spo_20" name="peep_spo_20" size="5" /></td>
										<td><input type="text" id="peep_ppico_20" name="peep_ppico_20" size="5" /></td>
										<td><input type="text" id="peep_deltap_20" name="peep_deltap_20" size="5" /></td>
										<td><input type="text" id="peep_pplato_20" name="peep_pplato_20" size="5" /></td>
										<td><input type="text" id="peep_dp_20" name="peep_dp_20" size="5" /></td>
										<td><input type="text" id="peep_melhor_20" name="peep_melhor_20" size="5" /></td>
										</tr>

										<tr>
										<td>18</td>
										<td><input type="text" id="peep_spo_18" name="peep_spo_18" size="5" /></td>
										<td><input type="text" id="peep_ppico_18" name="peep_ppico_18" size="5" /></td>
										<td><input type="text" id="peep_deltap_18" name="peep_deltap_18" size="5" /></td>
										<td><input type="text" id="peep_pplato_18" name="peep_pplato_18" size="5" /></td>
										<td><input type="text" id="peep_dp_18" name="peep_dp_18" size="5" /></td>
										<td><input type="text" id="peep_melhor_18" name="peep_melhor_18" size="5" /></td>

										</tr>

										<tr>
										<td>16</td>
										<td><input type="text" id="peep_spo_16" name="peep_spo_16" size="5" /></td>
										<td><input type="text" id="peep_ppico_16" name="peep_ppico_16" size="5" /></td>
										<td><input type="text" id="peep_deltap_16" name="peep_deltap_16" size="5" /></td>
										<td><input type="text" id="peep_pplato_16" name="peep_pplato_16" size="5" /></td>
										<td><input type="text" id="peep_dp_16" name="peep_dp_16" size="5" /></td>
										<td><input type="text" id="peep_melhor_16" name="peep_melhor_16" size="5" /></td>
										</tr>

										<tr>
										<td>14</td>
										<td><input type="text" id="peep_spo_14" name="peep_spo_14" size="5" /></td>
										<td><input type="text" id="peep_ppico_14" name="peep_ppico_14" size="5" /></td>
										<td><input type="text" id="peep_deltap_14" name="peep_deltap_14" size="5" /></td>
										<td><input type="text" id="peep_pplato_14" name="peep_pplato_14" size="5" /></td>
										<td><input type="text" id="peep_dp_14" name="peep_dp_14" size="5" /></td>
										<td><input type="text" id="peep_melhor_14" name="peep_melhor_14" size="5" /></td>


										</tr>
										
										<tr>
										<td>12</td>


										<td><input type="text" id="peep_spo_12" name="peep_spo_12" size="5" /></td>
										<td><input type="text" id="peep_ppico_12" name="peep_ppico_12" size="5" /></td>
										<td><input type="text" id="peep_deltap_12" name="peep_deltap_12" size="5" /></td>
										<td><input type="text" id="peep_pplato_12" name="peep_pplato_12" size="5" /></td>
										<td><input type="text" id="peep_dp_12" name="peep_dp_12" size="5" /></td>
										<td><input type="text" id="peep_melhor_12" name="peep_melhor_12" size="5" /></td>


										</tr>
										
										<tr>
										<td>10</td>
										<td><input type="text" id="peep_spo_10" name="peep_spo_10" size="5" /></td>
										<td><input type="text" id="peep_ppico_10" name="peep_ppico_10" size="5" /></td>
										<td><input type="text" id="peep_deltap_10" name="peep_deltap_10" size="5" /></td>
										<td><input type="text" id="peep_pplato_10" name="peep_pplato_10" size="5" /></td>
										<td><input type="text" id="peep_dp_10" name="peep_dp_10" size="5" /></td>
										<td><input type="text" id="peep_melhor_10" name="peep_melhor_10" size="5" /></td>
										</tr>
										
										<tr>
										<td>8</td>
										<td><input type="text" id="peep_spo_8" name="peep_spo_8" size="5" /></td>
										<td><input type="text" id="peep_ppico_8" name="peep_ppico_8" size="5" /></td>
										<td><input type="text" id="peep_deltap_8" name="peep_deltap_8" size="5" /></td>
										<td><input type="text" id="peep_pplato_8" name="peep_pplato_8" size="5" /></td>
										<td><input type="text" id="peep_dp_8" name="peep_dp_8" size="5" /></td>
										<td><input type="text" id="peep_melhor_8" name="peep_melhor_8" size="5" /></td>

										</tr>
										
										<tr>
										<td>6</td>
										<td><input type="text" id="peep_tit_dec_spo_6" name="peep_titu_dec_spo_6" value="" size="5" /></td>
										<td><input type="text" id="peep_tit_dec_ppico_6" name="peep_titu_dec_ppico_6" value="" size="5" /></td>
										<td><input type="text" id="peep_tit_dec_delta_6" name="peep_titu_dec_delta_6" value="" size="5" /></td>
										<td><input type="text" id="peep_tit_dec_deltap_6" name="peep_titu_dec_deltap_6" value="" size="5" /></td>
										<td><input type="text" id="peep_tit_dec_pplato_6" name="peep_titu_dec_pplato_6" value="" size="5" /></td>
										<td><input type="text" id="peep_tit_dec_melhorp_6" name="peep_titu_dec_melhorp_6" value="" size="5" /></td>
											
										   
										</tr>
										
										
										</tbody>


										</table>		
                                     
									
										
                               <table>
                                        <tr>
                                            <td>
                                                <b>Melhor PEEP:&nbsp;</b>
                                                <input type="text" id="peep_dec_melhor" name="peep_dec_melhor" value="" />&nbsp;&nbsp;cmH2O&nbsp;&nbsp;&nbsp;
                                                <b>Melhor Pins (Delta P):&nbsp;</b>
                                                <input type="text" id="peep_dec_melhor_pins_dp" name="peep_dec_melhor_pins_dp" value="" />&nbsp;&nbsp;cmH2O
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
                    <i class="fas fa-edit"></i><b> OBSERVAÇÕES </b>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body pad">
                <table id="formularios" cellpadding="5" style="width: 100%;">
                    <tr>
                        <td>
                            <label for="peep_observa">Observações:</label>
                            <textarea 
                                id="peep_observa" 
                                name="peep_observa" 
                                class="form-control" 
                                style="height:40px;" 
                                onKeyDown="maxLength('peep_observa', 8000);" 
                                onKeyUp="maxLength('peep_observa', 8000); verificaCaracteresRestantes(this.value, 'caracteres_restantesEnc');"><?php echo $peep_observa; ?>
                            </textarea>
                            <small id="caracteres_restantesEnc" class="form-text text-muted">
                                Caracteres restantes: 8000
                            </small>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
		</div>
					</div>	
				</div>		

 <div style="text-align:center">

 <!-- Campo oculto para controlar o estado 'finalizado' -->
    <input type="hidden" id="finalizado" name="finalizado" value="N">
    <!-- Campo oculto para controlar o estado 'retificado' -->
  

    <?php if('$finalizado'!="S"){ ?>
        <!-- Botão Salvar -->
        <button type="button" class="btn btn-primary btn-sm" onclick="javascript:validaForm('incluido');">Salvar</button>

        <!-- Botão Finalizar -->
        <button type="button" class="btn btn-success btn-sm" onclick="javascript:var sn = confirm('Tem certeza que finalizar o preenchimento desse formulário?\nApós a finalização não será possível alteração!'); if (sn == false) { return false; } validaForm('finalizado');">Finalizar</button>
    <?php } else { ?>
        <!-- Se finalizado, exibe o campo para motivo da retificação -->
        <fieldset id="formularios" class="linha_padrao_2">
            <legend>Motivo da Retificação</legend>
            <textarea style="width:750px;height:150px;display:block" id="motivo_retificacao" name="motivo_retificacao"></textarea>
        </fieldset>

        <!-- Botão Retificar -->
        <button type="button" class="btn btn-warning btn-sm" onclick="if(document.getElementById('motivo_retificacao').value == '') { 
                alert('Preencher o Motivo da Retificação!'); 
                return false; 
            } else {
                document.getElementById('retificado').value = 'S'; 
                document.getElementById('ficha_prot_titu_dec_peep').submit();
            }">Retificar</button>
    <?php } ?>

    <!-- Botão Fechar -->
    <button type="button" class="btn btn-danger btn-sm" onclick="javascript:window.close();">Fechar</button></div>
</form>

<script>
    function validaForm(situacao) {
       
       // var form = document.getElementById('ficha_prot_titu_dec_peep'); // Acesse o formulário pelo ID

        if (situacao.trim() == 'incluido') {
            document.getElementById('finalizado').value = 'N';
			if (document.getElementById('id_form').value != ''){
				document.getElementById('acao').value = 'A';
			}else{
				document.getElementById('acao').value = 'I';
			}
        } else {
            document.getElementById('finalizado').value = 'S';
        }

        // Submete o formulário após a modificação do valor
        ficha_prot_titu_dec_peep.submit();
    }
</script>


					
				</div>
			
		</div>
		





				
		             
		</form> 
          			  
   
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


	
   </body>
</html>
