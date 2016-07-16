# UploadFile
This repository has script written in PHP to upload files and images.

--> English

To use the Upload class, simply an instance and call the LoadFile () method.

The method takes four parameters, the latter being optional.
LoadFile ($ path, $ type, $ file, $ RenameFile = true)

Parameter 1: directory where the file will be sent.
Parameter 2: file type to use image "img" to compact files or .exe, for example, use "file".
Parameter 3: The variable $ _FILES.
Parameter 4: If the script should or should not rename the file automatically receives "True" or "False".

Validations are based on the mime / type and not on the file extension, feel free to add or remove according to your needs, so as not to leave values that will not be used.

_____________________________________________________

--> Português

Para utilizar a classe de Upload, basta fazer uma instancia e chamar o método LoadFile().

O método recebe quatro parametros, sendo o último opcional.
LoadFile($path, $type, $file, $renameFile = true)

Parâmetro 1: Diretório onde será enviado o arquivo.
Parâmetro 2: Tipo do arquivo, para imagem utilize "img" para arquivos compactos ou .exe, por exemplo, use "file".
Parâmetro 3: A variável $_FILES.
Parâmetro 4: Se o script deve ou não renomear o arquivo automaticamente, recebe "Verdadeiro" ou "Falso".

As validações são baseadas no Mime/type e não na extensão do arquivo, sinta-se a vontade para adicionar ou remover de acordo com suas necessidades, de tal forma a não deixar valores que não serão utilizados.



			<?php
				if(filter_input(INPUT_POST, "btnSubmit")){
					require_once("Upload.php");
					$upload = new Upload();
					
					$file = $upload->LoadFile("img", filter_input(INPUT_POST, "slType"), $_FILES["fl"]);
					
					if($file != ""){
						echo "<a href=\"img/{$file}\" target=\"_blank\">Access</a>";
					}else{
						echo "Error to upload file. Try again!";
					}
				}
			?>
