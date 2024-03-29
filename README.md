# Proyecto final de Tecnologías para la Web
## Frameworks que usaremos
### Laravel
#### Instalación
1. Descargar [Composer](https://getcomposer.org/).
2. Abrir el Command Prompt e ingresar el siguiente comando para instalar Laravel.
```
composer global require laravel/installer
```
#### Uso
Para poder correr un proyecto en *Laravel* tenemos que acceder a la carpeta raíz del proyecto por medio del Command Prompt.
Ejemplo:
```bash
Microsoft Windows [Versión 10.0.17763.379]
(c) 2018 Microsoft Corporation. Todos los derechos reservados.

C:\Users\ramir>cd C:/Users/ramir/Desktop/Gestion #cd es el comando usado para acceder a directorios

C:\Users\ramir\Desktop\Gestion> #El Command Prompt accedió al directorio del proyecto.
```
Una vez accedido tendremos que inicializar el proyecto con los siguientes comandos:
```
composer update
php artisan key:generate
php artisan cache:clear

```
Ya inicializado el proyecto, ejecutar el siguiente comando para abrir un servidor:
```
php artisan serve
```
Y se abrirá un servidor en el [localhost en el puerto 8000](http://localhost:8000/) por defecto.
## Primer avance ([PDF](DOCS/PROYECTO_FINAL_PRIMER_ENTREGA.pdf))
- 27 de Marzo del 2019 **Front end**
  - Modulo del administrador.
    - Pantalla de inicio de sesión.
    - Menú de administrador.
    - Alta de prácticas y visitas escolares. Requisitos:
      - Consecutivo de la Práctica (1,2,3…total de prácticas)
      - Programa académico
      - Nombre de la razón social
      - Nombre del profesor responsable
      - Fecha de realización
      - Total alumnos
      - Total Profesores
      - Presupuesto
      - Acciones (E = Editar y X = Eliminar). Se abre la ventana Modal
- 05 de Abril del 2019 **Front end** ([PDF](DOCS/PROYECTO_FINAL_SEGUNDA_ENTREGA.pdf))
  - Catalogos
    - Programa Academico
    - Semestre
    - Nivel
    - Grupo
    - Tipo de práctica
    - Entidad federativa**
    - Unidad de aprendisaje
    - Profesor
  - Catalogos contienen Datatable, agregar, editar y borrar.
- 18 de Abril del 2019 **Back end**
  - Primer diseño de la base de datos.
  - Iniciar sesión.
  - El menú de administrador puede navegar.
  - El Modal de agregar o editar prácticas y visitas escolares funciona.
  - Se pueden borrar prácticas y visitas escolares.
  

### Consideraciones:
- Programa académico viene de catálogo
- No. de práctica y visita escolar se genera a partir de la fecha de realización. Debemos
agregar un botón de cierre, para que de manera extemporánea se puedan generar nuevas
prácticas o modificar las ya existentes y respete los consecutivos ya asignados.
- Semestre viene de catálogo.
- Nivel viene de catálogo.
- Grupo (s) viene de catálogo.
- Número de alumnos.
- Fecha de realización.
- Tipo de práctica.
- Entidad Federativa viene de catálogo.
- Nombre de la empresa, institución o razón social.
- Unidad de Aprendizaje viene de catálogo.
- Competencias a desarrollar Text Editors.
- Objetivo usamos Text Editors.
- Estrategias para el desarrollo de las competencias usamos Text Editors.
- Nombre del profesor responsable viene de catálogo.
