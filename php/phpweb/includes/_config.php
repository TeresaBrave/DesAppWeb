Soy configuración

<?php

$debug=0; // modo en construccion

//Array que recogerá los elementos que vamos a utilizar
$menu =[
    // texto del botón     // enlace                        // target       //class
    ['txt'=>'Inicio',    'lnk'=>'index.php',                't'=>0,     'cls'=>'cosa1'],
    ['txt'=>'Contacto',  'lnk'=>'contacto.php',             't'=>0,     'cls'=>'cosa1'],
    ['txt'=>'Contacto',  'lnk'=>'contacto.php',             't'=>0,     'cls'=>'cosa1'],
    ['txt'=>'Youtube',  'lnk'=>'https://youtube.com/',      't'=>1,     'cls'=>'miyoutube'],
    ['txt'=>'Tiktok',  'lnk'=>'https://tiktok.com/',        't'=>1,     'cls'=>'mitiktok'],
    ['txt'=>'Facebook',  'lnk'=>'https://facebook.com/',    't'=>1,     'cls'=>'miFacebook']
];

$datos=[
    //Configuracion general
'tituloSite'  =>'Vintagedream',
'descripcion' => ' Una plataforma dedicada a los coleccionistas y entusiastas de los autos clásicos de época.',
'charset'     => 'UTF-8',
'lang'        => 'es',
'autor'       => 'Teresa Koen Domingos'
'timezone'    => 'Europe/Madrid'

//Rutas de archivos y directorios

'baseURL' => 'http://www.vintagedream.com/',        
'imgFolder' => 'assets/img/',
       
//Maquetacion para SEO
'metaKeywords'  => 'coches vintage, coches de colección, Hot Wheels, Majorette, Micro Machines, coches a escala',     
'metaDescription'=> 'AstraLavista',
// Redes sociales
'socials' => [
    'facebook'  => 'https://facebook.com/AstraLavistaAsturias',
    'twitter'   => 'https://twitter.com/AstraLavista',
    'instagram' => 'https://instagram.com/AstraLavistaAsturias',
    'youtube'   => 'https://youtube.com/AstraLavista',
    'tiktok'    => 'https://tiktok.com/@AstraLavista'
],

// Datos de contacto
'contacto' => [
    'email'     => 'contacto@astralavista.com',
    'telefono'  => '+34 600 123 456',
    'direccion' => 'C/ Observatorio, 12, Oviedo, Asturias, España',
    'mapa'      => 'https://maps.google.com/?q=C%2F+Observatorio,+12+Oviedo+Asturias+España'
],


// Parámetros visuales
'logo'          => 'assets/img/logo.png',
'logoFooter'    => 'assets/img/logo-footer.png',
'favicon'       => 'assets/img/favicon.ico',

];


function construyeMenu(){
    global $menu; //GLOBAL=llamamos  a elementos fuera de la función
      echo "<nav>  <ul>";

      //bucle
      foreach($menu as $elemento){
           echo "<li> <a href='{$elemento['lnk']}'";
           //comprobamos si target es igual a 0 o a 1
           if($elemento['t']){
            //si es 1 escribe esto
            echo "target='_blank' ";
           }

           echo "class='{$elemento['cls']}'>{$elemento['txt']}</a></li>";
           }
        //fin de bucle

echo "</ul> </nav>";
}

?>