<div class="espaco"></div>
	<div>
		<footer>
			<section class="rodape" id="sombra">
				<div class="conteiner-footer">
					<div class="botao-rep" id="footInf">
						<button class="btn btn-primary" id="report" onclick="reportar()">Reportar Erro</button>
						<script type="text/javascript">
							function reportar(){
								var comentRep = prompt("Informe o erro ocorrido:");
								if (comentRep != null) {
									alert("Agradecemos pela sua Informação! Em breve o erro será corrigido.");
								}
							}
						</script>
					</div>
					<br><br>
					<div class="espaco2"></div>
					<div id="licenca">
						<p class="h6">Atom® 2019 | versão 0.2.5 | © André F., Camile P. e Giovani M. </p>
					</div>
				</div>	
			</section>
		</footer>
	</div>	

</html>