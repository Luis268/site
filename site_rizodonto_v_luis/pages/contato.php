<div class="b-imagem" style="background: url('<?= URLSITE."/files/images/20/d55bb24dbbf83572c04f70a38af91fe7.png" ?> ') no-repeat 50% 50% #5cc6a2;"></div>

<div class="b-contato">
	
	<div class="container">
		<div class="row">
			<div class="col-md texto_fff bg-bloco-1 b-aj-bloco">
				<h2><img src="<?= URLSITE.'/files/images/19/0b6fa3a515ea2fa63e96bab7a7e230f8.png'; ?>" alt="" />&nbsp;
					FALE <b>CONOSCO</b>
				</h2>
				<div class="row">
				<div class="col-12">
					<p class="b-aj-texto">
						Entre em contato com a unidade de sua preferência.
					</p>
					<p class="b-aj-texto">
						Deixe sua Sugestão a respeito de nosso Atendimento nas Unidades.
					</p>
				</div>
				<div class="col-12">
					<p>
						<a href="#" class="btn-contato">IR PARA UNIDADE</a>
					</p>
				</div>
				<div class="col-12">
					<p class="b-aj-texto">
						Ou fale conosco pelo whatsapp nos números:
					</p>
				</div>
				<div class="col-2 col-md-2">
					<i class="fa fa-whatsapp fa-2x"></i>
				</div>
				<div class="col-10 col-md-10">
					<p class="b-aj-texto">(11)95048-3357 - Guaianases</p>
					<p class="b-aj-texto">(11)94329-2676 - Tiradentes</p>	
					<p class="b-aj-texto">(11) 94389-1231 - Bonaventura</p>							 
				</div>

				<div class="col-12">
					<p class="b-aj-texto">
						Atendimento de segunda-feira à Sábado das 8:00hs às 18:00hs.
					</p> 
				</div>
				</div>
			</div>
			<div class="col-md texto_6_1 b-aj-bloco">
				<h2><img src="<?= URLSITE.'/files/images/19/0b6fa3a515ea2fa63e96bab7a7e230f8.png'; ?>" alt="">&nbsp;DEIXE SUA <b>MENSAGEM</b></img></h2>
				

				<form action="" method="POST" name="form_ext">
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" class="form-control ajuste_inputs_form" id="inputNomeContato" name="inputNomeContato" data-required="s" placeholder="&#xf007 Nome">
							<small class="texto_alerta_0" id="texto_alerta_inputNomeContato"></small>
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="form-control ajuste_inputs_form" id="inputEmailContato" name="inputEmailContato" data-required="s" placeholder="&#xf0e0 E-mail">
							<small class="texto_alerta_0" id="texto_alerta_inputEmailContato"></small>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" class="form-control ajuste_inputs_form" id="inputAssuntoContato" name="inputAssuntoContato" data-required="s" placeholder="&#xf135 Assunto">
							<small class="texto_alerta_0" id="texto_alerta_inputAssuntoContato"></small>
						</div>
						<div class="form-group col-md-6">
							<input type="tel" class="form-control ajuste_inputs_form tel" id="inputTelefoneContato" name="inputTelefoneContato" data-required="s" placeholder="&#xf095 Telefone">
							<small class="texto_alerta_0" id="texto_alerta_inputTelefoneContato"></small>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
						<legend class="col-form-label col-sm-6 pt-0">
							<i class="fa fa-building-o"></i>
							Nossas Unidades:
						</legend>
						<div class="col-sm-6">

							<div class="row">
								<div class="col-sm-6">
									<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
									<label class="form-check-label" for="gridRadios1">
									Guaianases
									</label>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
									<label class="form-check-label" for="gridRadios2">
									Tiradentes
									</label>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
									<label class="form-check-label" for="gridRadios3">
									Bonaventura
									</label>
									</div>
									</div>
								</div>

							</div>

						</div>
					</div>
					<div class="form-group">
						<textarea name="textDescricaoContato" class="form-control ajuste_inputs_form" id="textDescricaoContato" cols="5" rows="3" placeholder="Descrição" data-required="s" ></textarea>						
						<small class="texto_alerta_0" id="texto_alerta_textDescricaoContato"></small>
					</div>					
					<div class="form-group text-center b-aj-botao-contato">
					<button type="button" onclick="return faleConosco();" class="btn btn-primary">Enviar</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

