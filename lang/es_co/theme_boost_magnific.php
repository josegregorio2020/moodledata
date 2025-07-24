<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_boost_magnific', language 'es_co', version '4.1'.
 *
 * @package     theme_boost_magnific
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['background_color'] = 'Color de fondo';
$string['background_color_desc'] = '¡Color de fondo de la cabecera y el pie de página!';
$string['background_color_random'] = 'Tema aleatorio {$a}';
$string['background_text_color'] = 'Color del texto';
$string['background_text_color_desc'] = '¡Color del texto del encabezado y pie de página!';
$string['choosereadme'] = 'Boost Magnific es un tema elaborado con cuidado para llevar colores alegres a Moodle.';
$string['contact_address'] = 'Dirección';
$string['contact_email'] = 'Correo electrónico';
$string['contact_phone'] = 'Número de teléfono';
$string['content_type_default'] = 'Predeterminado de Moodle';
$string['content_type_empty'] = '(Sin contenido)';
$string['content_type_footer'] = 'Tipo de contenido para el pie de página';
$string['content_type_footer_desc'] = 'Seleccione el tipo de contenido que desea mostrar en el pie de página.';
$string['content_type_home'] = 'Tipo de contenido para la página de inicio';
$string['content_type_home_desc'] = 'Seleccione el tipo de contenido que desea mostrar en la página de inicio.';
$string['content_type_html'] = 'Página a crear con el editor';
$string['continuar'] = 'Continuar estudiando';
$string['countlesson'] = 'Lección {$a}';
$string['countlessons'] = 'Lecciones {$a}';
$string['course_access'] = 'Acceder al curso';
$string['course_moore'] = 'Más detalles';
$string['customcss'] = 'CSS personalizado';
$string['customcss_desc'] = 'Cualquier regla CSS que agregue a esta área de texto se reflejará en todas las páginas, lo que facilitará la personalización de este tema.';
$string['custommenuitems'] = 'Elementos de menú personalizados en la parte superior';
$string['custommenuitems_desc'] = 'Puede crear un menú personalizado junto a los menús superiores. El menú raíz debe comenzar pegado al borde, y los submenús deben ir precedidos por un guion (-). La cantidad de guiones determina la profundidad del elemento. Así, los elementos con un solo guion aparecen en un submenú debajo del elemento de nivel superior anterior, y los elementos con dos guiones aparecen en un submenú debajo del submenú precedente.
El contenido de cada elemento de menú debe constar de hasta tres elementos (<strong>etiqueta</strong> | <strong>URL</strong> | <strong>tooltip</strong> | <strong>idioma</strong>), cada uno separado por el carácter "|".
<ul>
<li><strong>etiqueta</strong>: Este es el texto que se mostrará dentro del elemento de menú. Debe especificar una etiqueta para cada elemento de menú.</li>
<li><strong>URL</strong>: Esta es la URL a la que se dirigirá el usuario al hacer clic en el elemento de menú. Esto es opcional; si no se proporciona, el elemento no estará vinculado a ningún lugar.<br>
Otros atributos como "target" pueden añadirse al final de la URL.</li>
<li><strong>tooltip</strong>: Si proporciona una URL, también puede elegir proporcionar un tooltip para el enlace creado con la URL. Esto es opcional, y si no se define, la etiqueta se utiliza como tooltip para el elemento de menú.</li>
<li><strong>idioma</strong>: Puede agregar un código de idioma (o una lista de códigos separados por comas) como el cuarto elemento de la línea. La línea se mostrará solo si el usuario ha seleccionado el/los idioma(s) listado(s).</li>
</ul>
A continuación se muestra un ejemplo de cómo crear un menú personalizado:
<blockquote><pre>
Cursos
-Todos los cursos | /curso/
-Mis cursos
--Curso de ejemplo
---Curso de ejemplo 7 | /curso/ver.php?id=7
---Curso de ejemplo 9 | /curso/ver.php?id=9
--Curso de prueba
---Curso de prueba 2 | /curso/ver.php?id=2
---Curso de prueba 5 | /curso/ver.php?id=5
Google
-Google en cualquier idioma | https://google.com/" target="_blank
-Google en México | https://www.google.com.mx/" target="_blank|Etiqueta de Google|es
-Google en portugués | https://google.com.br/" target="_blank|Etiqueta de Google|pt,pt_br,pt_br_kids
Página de soporte | https://soporte.com/" target="_blank
</pre></blockquote>
Para Moodle con soporte para varios idiomas, el valor de <strong>etiqueta</strong> debe estar formateado como <strong>"nombrecadena,nombrecomponente"</strong>.
<blockquote><pre>
perfil,moodle | /perfil/usuario.php
mensajes,mensaje | /mensaje/indice.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/es/Configuraciones_avanzadas_de_tema" target="_blank">Más información sobre menús</a>';
$string['editor_link_footer'] = 'Editar el bloque de pie de página para el idioma {$a}';
$string['editor_link_footer_all'] = 'Editar el bloque de pie de página para todos los idiomas';
$string['editor_link_home'] = 'Editar la página de inicio para el idioma {$a}';
$string['editor_link_home_all'] = 'Editar la página de inicio para todos los idiomas';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'El favicon se muestra junto al título de la página en la pestaña del navegador. Se muestra un favicon de Moodle si no se proporciona un favicon personalizado.';
$string['fontfamily'] = 'Fuentes de texto del sitio';
$string['fontfamily_desc'] = 'Elija qué fuente desea usar para el texto en su sitio de Moodle.';
$string['fontfamily_menus'] = 'Fuentes del menú';
$string['fontfamily_menus_desc'] = 'Elija qué fuente desea usar para los menús en su sitio de Moodle.';
$string['fontfamily_sitename'] = 'Fuente para el nombre del sitio';
$string['fontfamily_sitename_desc'] = 'La fuente que se aplicará al nombre del sitio si no se proporciona un logo.';
$string['fontfamily_title'] = 'Fuentes de texto de los títulos';
$string['fontfamily_title_desc'] = 'Elija qué fuente desea usar para los títulos en su sitio de Moodle.';
$string['fontpreview'] = 'Vista previa de la lista de fuentes';
$string['footer_contact_title'] = 'Título del bloque de contacto';
$string['footer_contact_title_default'] = 'Contáctenos';
$string['footer_contact_title_desc'] = 'Ingrese el título del bloque que aparecerá en el pie de página con los detalles de contacto.';
$string['footer_description'] = 'Descripción';
$string['footer_description_desc'] = 'Describa su Moodle, lo que hace, y esta información se mostrará debajo del logo en el pie de página de Moodle';
$string['footer_frontpage_blockcourses_instructor'] = 'Mostrar nombre del profesor';
$string['footer_frontpage_blockcourses_instructor_desc'] = '¡Si está marcado, muestra los nombres de los profesores en la lista de cursos!';
$string['footer_frontpage_blockcourses_text'] = 'Breve texto explicativo del bloque "{$a}"';
$string['footer_frontpage_blockcourses_text_desc'] = 'Agrega un texto hablando sobre "{$a}"!';
$string['footer_links_title'] = 'Título del Bloque de Enlaces';
$string['footer_links_title_default'] = 'Enlaces Importantes';
$string['footer_show_copywriter'] = 'Mostrar Hecho con ❤️';
$string['footer_show_copywriter_desc'] = 'Desmarca si quieres ocultar el "Hecho con ❤️"';
$string['footer_social_title'] = 'Título del Bloque de Enlaces Sociales';
$string['footer_social_title_default'] = 'Síguenos en las redes sociales';
$string['footer_social_title_desc'] = 'Ingrese el título del bloque que aparecerá en el pie de página con los datos de sus redes sociales.';
$string['footerblink'] = 'Enlaces del Bloque de Pie de Página';
$string['footerblink_desc'] = 'Puede configurar aquí los enlaces del Bloque de Pie de Página para que se muestren en los temas.<br>Cada línea consta de un texto de menú o clave de idioma o texto, una URL de enlace (opcional), separados por barras verticales. Por ejemplo:<br><pre>Soporte de Moodle|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'Bloque de contacto';
$string['footerblock_copywriter'] = 'Hecho con ❤️';
$string['footerblock_description'] = 'Bloque de descripción';
$string['footerblock_links'] = 'Bloque de enlaces';
$string['footerblock_social'] = 'Bloque Social';
$string['free_name'] = 'Gratis';
$string['frontpage_about_description'] = 'Describe lo que haces';
$string['frontpage_about_description_desc'] = 'Describe en un máximo de 5 líneas el propósito de tu Moodle';
$string['frontpage_about_enable'] = 'Activar bloque Acerca de';
$string['frontpage_about_enable_desc'] = '¡Si está marcado, el Bloque Acerca de aparecerá debajo del Banner!';
$string['frontpage_about_info'] = 'Caja de datos {$a}';
$string['frontpage_about_logo'] = 'Diferente logotipo para mostrar aquí';
$string['frontpage_about_logo_desc'] = 'Si está configurado, este logo se usará aquí en lugar del logo superior.<br>¡En blanco usa el Logo superior!';
$string['frontpage_about_number'] = 'Cantidad de datos';
$string['frontpage_about_number_desc'] = 'Ingrese la cantidad de información mencionada anteriormente';
$string['frontpage_about_text'] = 'Nombre de los datos';
$string['frontpage_about_text_1_defalt'] = 'Cursos';
$string['frontpage_about_text_2_defalt'] = 'Profesores';
$string['frontpage_about_text_3_defalt'] = 'Estudiantes';
$string['frontpage_about_text_4_defalt'] = 'Lecciones';
$string['frontpage_about_text_desc'] = 'Ingrese el nombre de los datos que se mostrarán en la página de inicio';
$string['frontpage_about_title'] = 'Título del bloque Acerca de';
$string['frontpage_about_title_default'] = 'Nuestra Comunidad Global';
$string['heart'] = 'Si te gusta este tema, no olvides hacer clic en ❤️ en la página de temas <a href="{$a}" target="_blank">haciendo clic aquí</a>';
$string['instructor'] = 'Instructor';
$string['login_backgroundcolor'] = 'Color de Fondo';
$string['login_backgroundcolor_desc'] = 'Selecciona el color de fondo de la página de recuperación de contraseña';
$string['login_backgroundfoto'] = 'Imagen de Fondo';
$string['login_backgroundfoto_desc'] = 'Selecciona la imagen de fondo para Inicio de Sesión/Recuperación de Contraseña/Crear Cuenta. La imagen predeterminada es: {$a}';
$string['login_forgot_description'] = 'Texto en el lado de la Pantalla de Olvidé mi Contraseña';
$string['login_forgot_description_desc'] = 'Texto que aparecerá solo en la pantalla de olvidé mi contraseña';
$string['login_login_description'] = 'Texto en el lado de la Pantalla de Inicio de Sesión';
$string['login_login_description_desc'] = 'Texto que aparecerá solo en la pantalla de inicio de sesión';
$string['login_signup_description'] = 'Texto en el lado de la Pantalla de Crear una Cuenta';
$string['login_signup_description_desc'] = 'Texto que aparecerá solo en la pantalla de crear una cuenta';
$string['login_theme'] = 'Tema de inicio de sesión';
$string['login_theme_block'] = 'Bloque blanco central con fondo opcional';
$string['login_theme_desc'] = 'Elige qué tema deseas en el área de inicio de sesión';
$string['login_theme_image_login'] = 'Imagen de fondo e inicio de sesión en el lado';
$string['login_theme_imagetext_login'] = 'Imagen de fondo, texto sobre la imagen e inicio de sesión en el lado';
$string['login_theme_login'] = 'Solo pantalla de inicio de sesión, sin imagen lateral';
$string['logo_color'] = 'Logotipo a color';
$string['logo_color_desc'] = 'Sube tu LOGO a color si quieres incluirlo en la parte superior. Este logotipo se mostrará a medida que se desplaza la página y el menú se mostrará en un fondo blanco.';
$string['logo_write'] = 'Logo del menú superior al desplazarse';
$string['logo_write_desc'] = 'Por favor, carga tu logo si deseas incluirlo en la parte superior. Este logo se mostrará cuando el desplazamiento permanezca en la parte superior, y el menú se mostrará en un fondo de color.';
$string['matricular'] = 'Inscribirse';
$string['mycourses_color'] = 'Color de Fondo del Bloque';
$string['mycourses_color_desc'] = 'El color de fondo para el bloque.';
$string['mycourses_icon'] = 'Ícono';
$string['mycourses_icon_desc'] = 'Un ícono representativo para el bloque. El tamaño del ícono debe ser de 48x48 píxeles.';
$string['mycourses_info'] = 'Bloque {$a}';
$string['mycourses_numblocos'] = 'Sin bloques';
$string['mycourses_numblocos_desc'] = '¿Cuántas imágenes deseas en la Presentación de Diapositivas?';
$string['mycourses_numblocos_nenhum'] = 'Sin diapositivas en la página de inicio';
$string['mycourses_title'] = 'Título Corto del Bloque';
$string['mycourses_title_desc'] = 'Un título corto y descriptivo para el bloque.';
$string['mycourses_url'] = 'Enlace del Bloque';
$string['mycourses_url_desc'] = 'La URL a la que se navegará al hacer clic en el bloque. Puede ser un enlace externo o un enlace interno dentro de la plataforma.';
$string['pluginname'] = 'Boost Magnific';
$string['privacy:metadata'] = 'El tema Boost Magnific no almacena ningún dato personal sobre ningún usuario.';
$string['settings_about_heading'] = 'Sobre su Moodle';
$string['settings_css_heading'] = 'Fuentes y CSS';
$string['settings_footer_heading'] = 'Bloque de pie de página';
$string['settings_icons_change_icons'] = 'Cambiar el icono predeterminado en la lista de cursos';
$string['settings_login_heading'] = 'Pantalla de inicio de sesión';
$string['settings_mycourses_heading'] = 'Bloques de Mis Cursos';
$string['settings_slideshow_heading'] = 'Presentación de diapositivas';
$string['settings_theme_heading'] = 'Tema';
$string['settings_top_heading'] = 'Menú Superior';
$string['sitefonts'] = 'Fuentes adicionales de Google';
$string['sitefonts_desc'] = 'Inserte el código @import de Google Fonts como se indica en la imagen a continuación. Después de guardar, el campo "Fuente del sitio" se actualizará, mostrando estas fuentes. Puede agregar múltiples @import según sea necesario.';
$string['slidecaption_desc'] = 'Ingrese el texto de la leyenda que se utilizará en la diapositiva';
$string['slideshow_image'] = 'Imagen de la diapositiva';
$string['slideshow_image_desc'] = 'La imagen debe tener 1250px X 400px.';
$string['slideshow_info'] = 'Diapositiva {$a}';
$string['slideshow_numslides'] = '¿Cuántas imágenes en la presentación de diapositivas?';
$string['slideshow_numslides_desc'] = '¿Cuántas imágenes desea en la presentación de diapositivas?';
$string['slideshow_numslides_nenhum'] = 'Sin diapositivas en la página de inicio';
$string['slideshow_text'] = 'Texto descriptivo corto para la diapositiva';
$string['slideshow_text_desc'] = 'Inserte un texto corto sobre la diapositiva.';
$string['slideshow_url'] = 'Enlace del botón de las diapositivas';
$string['slideshow_url_desc'] = 'Inserte el enlace de destino para el botón de la imagen de la diapositiva';
$string['social_facebook'] = 'Tu Facebook';
$string['social_facebook_desc'] = 'URL de Facebook de tu organización.';
$string['social_instagram'] = 'Tu Instagram';
$string['social_instagram_desc'] = 'URL de Instagram de tu organización.';
$string['social_linkedin'] = 'Tu Linkedin';
$string['social_linkedin_desc'] = 'URL de Linkedin de tu organización.';
$string['social_twitter'] = 'Tu Twitter';
$string['social_twitter_desc'] = 'URL de Twitter de tu organización.';
$string['social_youtube'] = 'Tu Youtube';
$string['social_youtube_desc'] = 'URL de Youtube de tu organización.';
$string['theme_boost_magnific_about_editbooton'] = 'Editar bloque Acerca de';
$string['theme_boost_magnific_frontpage_bloco'] = 'Bloque "{$a}"';
$string['theme_boost_magnific_frontpage_home'] = 'Bloques de inicio';
$string['theme_boost_magnific_mycourses_editbooton'] = 'Editar Bloques';
$string['theme_boost_magnific_slideshow_editbooton'] = 'Editar Presentación';
$string['theme_color'] = 'Selección de color';
$string['theme_color-color_buttons'] = 'Color de los Botones';
$string['theme_color-color_buttons_desc'] = 'El color utilizado para los botones, añadiendo cohesión visual y enfatizando acciones interactivas.';
$string['theme_color-color_primary'] = 'Color Primario';
$string['theme_color-color_primary_desc'] = 'El color primario principal del tema, generalmente utilizado para resaltar y enfatizar elementos.';
$string['theme_color-color_secondary'] = 'Color Secundario';
$string['theme_color-color_secondary_desc'] = 'Un color secundario que complementa el color primario, utilizado para resaltar elementos secundarios o contrastar con el color primario.';
$string['theme_color_desc'] = 'Selecciona los colores de los textos y botones de Moodle o haz clic en la línea a continuación:';
$string['theme_color_heading'] = 'Selección de color del entorno';
$string['theme_color_sugestion'] = 'Sugerencia de color';
$string['theme_color_sugestion_text'] = 'Haz clic en la línea para aplicar el color a los campos a continuación:';
$string['theme_login_branco'] = 'Solo pantalla de inicio de sesión, sin imagen lateral, con el formulario en un fondo blanco';
$string['top_color_heading'] = 'Color de desplazamiento superior';
$string['top_scroll'] = 'Fijar el menú al desplazarse por la página';
$string['top_scroll_background_color'] = 'Color de fondo del menú superior al desplazarse';
$string['top_scroll_background_color_desc'] = 'Establece el color de fondo al desplazar la página.';
$string['top_scroll_desc'] = 'Cuando esté habilitado, el menú se fijará en la parte superior de la pantalla mientras desplazas la página, asegurando un fácil acceso a las opciones del menú.';
$string['top_scroll_text_color'] = 'Color del texto del menú al desplazarse';
$string['top_scroll_text_color_desc'] = 'Establece el color del texto del menú al desplazarse la página.';
$string['vvveb_footer_contact_title_default'] = 'Contáctanos';
$string['vvveb_home_access'] = 'Acceder al curso';
$string['vvveb_home_automatically_catalogo'] = 'No edites. Este bloque será reemplazado automáticamente por el catálogo de cursos.';
$string['vvveb_home_automatically_category'] = 'No edites. Este bloque será reemplazado automáticamente por las categorías de cursos.';
$string['vvveb_home_automatically_my_course'] = 'No editar. Este bloque será automáticamente reemplazado con los cursos en los que el estudiante está inscrito.';
$string['vvveb_home_automatically_popular'] = 'No edites. Este bloque será reemplazado automáticamente por los cursos más populares.';
$string['vvveb_home_catalogo_heading'] = 'Catálogo de cursos';
$string['vvveb_home_category_heading'] = 'Categorías de cursos';
$string['vvveb_home_mycourses_heading'] = 'Mis Cursos';
$string['vvveb_home_popular_course'] = 'Cursos Populares';
$string['vvveb_home_team_subtitle'] = 'Somos un grupo de profesionales dedicados a su trabajo';
$string['vvveb_home_team_title'] = 'Conoce Nuestro Equipo';
