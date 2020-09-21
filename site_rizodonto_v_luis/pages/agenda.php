<?php include_once "calendario.php"; ?>
<div class="b-agenda" style="background: url('<?= URLSITE."/files/images/18/a80e4cde644cb79b7a71a99b6469a29d.png"?>') no-repeat 50% 50% #5cc6a2;">
    
    <div class="container">
        <div class="row">
            <div class="col-md texto_fff t-texto">
                <h2><img src="<?= URLSITE . "/files/images/17/6b7fe376d6f1bbee58a0a295ab5a07ab.png"; ?>" alt="">&nbsp;AGENDE SEU <b>HORÁRIO</b></h2>
                <p>
                    Agora ficou Mais Fácil!
                
                <br>
Solicite a data e horário para realizar sua avaliação e entraremos em contato para confirmar via Email ou Telefone.
                </p>
            </div>

            <div class="col">&nbsp;</div>
            
        </div>
    </div>
</div>


<div class="container">   
    <div class="row">
        <div class="col-md-8">
            <div class="calendario">
                <?php montaCalendario(); ?>                
            </div>
        </div>

        <div class="col-md">

            <form action="funcao/insert.php" method="POST" name="form_agenda" class="b-form-agenda">
                <div class="form-group">
                    <select class="form-control b-select-agenda" data-required="s" name="selectUnidade" id="selectUnidade">
                        <option value="">Escolha uma unidade</option>
                        <option value="Guaianases">Guaianases</option>
                        <option value="Tiradentes">Tiradentes</option>
                        <option value="Bonaventura">Bonaventura</option>
                    </select>
                    <small class="texto_alerta_0" id="texto_alerta_selectUnidade"></small>
                </div>
                <div class="form-group">
                    <select class="form-control b-select-agenda" data-required="s" id="selectHorario" name="selectHorario">
                        <option value="">Escolha um Horário</option>                    
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                    </select>
                    <small class="texto_alerta_0" id="texto_alerta_selectHorario"></small>
                </div>
                <div class="form-group">                
                    <input type="text" class="form-control b-input-agenda" id="inputName" name="inputName" data-required="s" placeholder="&#xf007 Nome">
                    <small class="texto_alerta_0" id="texto_alerta_inputName"></small>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control b-input-agenda tel" id="inputTelefone" name="inputTelefone" data-required="s" placeholder="&#xf095 Telefone">
                    <small class="texto_alerta_0" id="texto_alerta_inputTelefone"></small>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control b-input-agenda" id="inputEmail" name="inputEmail" data-required="s" placeholder="&#xf0e0 E-mail">
                    <small class="texto_alerta_0" id="texto_alerta_sinputEmail"></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control b-input-agenda" id="inputData" name="inputData" data-required="s" placeholder="&#xf073 Selecione uma data">
                    <small class="texto_alerta_0" id="texto_alerta_inputData"></small>
                </div>
                <div class="form-group">
                    <button type="button" onclick="return agendamentos();" class="btn btn-primary pull-right b-aj-btn">Enviar</button>
                </div>
            </form>          
            
            
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="response"></div>
        </div>
    </div>
</div>

