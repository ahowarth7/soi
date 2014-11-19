<form class="contact_form" action="" method="post" name="contact_form">
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="img/document-index-icon.png" />
				</figure>
				

					<datalist id="lista">
						<option value="Formación Tecnica"></option>
					</datalist>
					<datalist id="tipo_oficio">
						<option value="Memorandum"></option>
						<option value="Comunicado Electronico"></option>
					</datalist>
					<datalist id="lista_nombres">
						<option value="Ingrid Lizama"></option>
						<option value="Nayeli Díaz"></option>
						<option value="Miguel Flores"></option>
						<option value="Josue Pastrana"></option>
						<option value="Nery Perez"></option>
					</datalist>

				<div class="detalles">
					<h2 class="titulo">
						Formulario de Creación de Oficios
					</h2>
					<p><label for="name">Tipo de Documento:</label> <input name="tipo_oficio" list="tipo_oficio"></p>
					<p><label for="name">Fecha de Emicisión:</label><input type="datetime" name="fecha" step="1" /></p>
					<p><label for="name">Área:</label> <input name="lista_area" list="lista"></p>
					<p><label for="name">Asunto:</label><input type="text" name="asunto"></p>
					<p><label for="name">Descripción:</label><textarea rows="10" cols="30"></textarea></p>
					<p><label for="name">Dirigido A:</label><input type="text" name="dirigido"></p>
					<p><label for="name">Cargo:</label><input type="text" name="asunto"></p>
					<p><label for="name">Emitido Por:</label><input name="lista_nombres" list="lista_nombres"></p>
					<p><label for="name">Agregar Oficio:</label><input type="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></p>
				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="tag" href="#">Cancelar</a>
					<a class="tag" href="#">Enviar</a>
				</div>
			</div>
		</article>
</form>