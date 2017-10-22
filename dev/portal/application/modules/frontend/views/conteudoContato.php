<script>
    function telefone() {
        $("#inputtelefone").mask("(99) 9999-9999");
    }
</script>
<section class="container container-padding-60 font-oswald-light font-light">
    <div class="content">
        <div>
            <header class="content" style="background: #993333; height: 5px; text-align: center;">
                <h2 id="conteudoPrincipal" tabindex="11" class="fontsize30 font-vinho font-oswald-light al-center ds-inblock news_style">ENTRE EM CONTATO</h2>;
            </header>
            <br>
            <br>
            
            <br>
            <?php echo isset($mensagem) ? $mensagem : NULL;?>
            <div>
                <section class=" grid-12 font-oswald-light news_description fontsize18 ds-block border-grey" style="margin-right: 20%">                                
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label" tabindex="12">Nome:</label>
                            <div class="col-sm-6" style="margin-left: 10%; margin-top: -2.9%">                                      
                                <input id="nome" title="informe seu nome" tabindex="13" name="Nome" class="form-control" id="inputNome" placeholder="ex: João Pablo" type="text" required value="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="14" for="idade" class="col-sm-2 control-label">Idade:</label>
                            <div class="col-sm-2" style="margin-left: 3.5%; margin-top: 1%">
                                <input id="idade" title="informe sua idade" tabindex="15" name="Idade" type="number" class="form-control" style="margin-left: 7%; margin-top: -8%" id="inputIdade" placeholder="ex: 28"max="100" min="1" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label tabindex="16" for="escolaridade" class="col-sm-2 control-label">Escolaridade:</label>
                            <div class="col-sm-6" style="margin-left: 14.5%; margin-top: -2.9%">
                                <input id="escolaridade" title="informe sua escolaridade" tabindex="17" name="Escolaridade" class="form-control" id="inputEscolaridade" placeholder="ex: Ensino Médio">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="18" for="profissao" class="col-sm-2 control-label">Profissão:</label>
                            <div class="col-sm-6" style="margin-left: 12%; margin-top: -2.9%">
                                <input id="profissao" title="informe sua profissão" tabindex="19" name="Profissao" type="text" class="form-control" id="inputProfissao" placeholder="ex: Professor">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="20" for="sexo" class="col-sm-2 control-label">Sexo:</label>                                    
                            <div class="radio" style="margin-left: 12%; margin-top: -2.9%" >
                                <label for="feminino"><input id="feminino" type="radio" title="feminino" tabindex="21"type="radio" name="sexo1" value="Feminino" >Feminino</label>
                                <label for="masculino"><input id="masculino" type="radio" title="masculino" tabindex="22" type="radio" name="sexo1" value="Masculino">Masculino</label>  
                            </div>                                   
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="22" for="etnia" class="col-sm-2 control-label">Etnia:</label>
                            <div class="col-sm-3" style="margin-left: 12%; margin-top: -2.9%">
                                <select id="etnia" title="selecione sua etnia" tabindex="23" class="form-control" name="etnia">
                                    <option value="Branco">Branco</option>
                                    <option value="Negro">Negro</option>
                                    <option value="Indígena">Indígena</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="24" for="estado" class="col-sm-2 control-label">Estado:</label>
                            <div class="col-sm-3" style="margin-left: 12%; margin-top: -2.9%">
                                <select id="estado" title="selecione seu estado" tabindex="25" class="form-control" name="estado">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option> 
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="26" for="cidade" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-6" style="margin-left: 12%; margin-top: -2.9%">
                                <input id="cidade" title="informe sua cidade" tabindex="27" name="cidade" type="text" class="form-control" id="inputcidade" placeholder="ex: Alegrete">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="28" for="telefone" class="col-sm-2 control-label">Telefone:</label>
                            <div class="col-sm-6" style="margin-left: 12%; margin-top: -2.9%">
                                <input id="telefone" title="informe seu telefone" tabindex="29" name="telefone" onclick="telefone();" type="telefone" class="form-control" id="inputtelefone" placeholder="ex: (XX) xxxx-xxxx">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="30" for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-6" style="margin-left: 12%; margin-top: -2.9%">
                                <input id="email" title="informe seu email" tabindex="31" name="email" class="form-control" id="inputEmail" placeholder="ex: pessoa@endereco.com" type="email" required name=email>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label tabindex="32" for="opiniao" class="col-sm-2 control-label">Deixe sua Opinião:</label>
                            <div class="col-sm-6" style="margin-left: 19%; margin-top: -2.9%">
                                <textarea id="opiniao" title="digite sua mensagem" tabindex="33" name="deixe sua opinião" class="form-control" rows="6" style="width: 60%" placeholder="ex: mensagem/opinião/sugestão/reclamação/ avaliar o museu. Obrigada, sua opinião é importante!" required value=""></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div  class="col-sm-offset-2 col-sm-10">
                                <button tabindex="34" input type="submit" value="Submit" class="btn btn-default btn-lg fontsize25">Enviar</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            </body>
        </div>
    </div>
</section>