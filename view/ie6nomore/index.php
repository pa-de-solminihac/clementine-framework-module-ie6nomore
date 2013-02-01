<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>IE 6 no more !</title>
<?php
$this->getModel('cssjs')->register_css('ie6nomore', array('src' => __WWW_ROOT_IE6NOMORE__ . '/skin/css/style.css', 'media' => 'screen'));
$this->getBlock('cssjs/head', $data);
?>
</head>
<h1>Vous utilisez le navigateur Internet Explorer 6</h1>
<p>
Ce navigateur, sorti en 2001, <strong>n'est plus maintenu</strong> et Microsoft en déconseille l'utilisation (problèmes de sécurité et de compatibilité).
</p>
<p>
Pour naviguer correctement sur le site <?php echo
Clementine::$config['clementine_global']['site_name']; ?> (et beaucoup
d'autres) mettez à jour votre navigateur sur le site de
<a target="_blank" href="http://windows.microsoft.com/fr-FR/internet-explorer/products/ie/home">Microsoft</a>
ou utilisez 
<a target="_blank" href="http://www.mozilla.org/fr/firefox/fx/">Mozilla Firefox</a>,
<a target="_blank" href="https://www.google.com/chrome">Google Chrome</a>...
</p>
<?php
$this->getBlock('cssjs/foot', $data);
?>
</html>
