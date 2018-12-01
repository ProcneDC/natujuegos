# natujuegos
Laravel - Game

<h3>Instalación</h3>

<ul>
<li>desde la consola en un directorio con permiso de escritura: <br>
		git clone https://github.com/ProcneDC/natujuegos.git<br>
		cd natujuegos <br>
		composer install <br>
		cp .env.example .env <br>
		php artisan key:generate <br><br>
</li>

<li>Crear un schema en MySQL llamado "natujuegos"</li>

<li>Editar el archivo .env para modificar los seteos del servidor MySQL</li>

<li>Tipear en la consola:<br>
	php artisan migrate <br>
	php artisan serve <br><br>
</li>

<li> Ir a localhost:8000 en el navegador
</li>
</ul>
