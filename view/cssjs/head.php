<?php
if (Clementine::$config['module_jstools']['use_google_cdn']) {
    $this->getModel('cssjs')->register_js('jquery', array('src' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'));
} else {
    $this->getModel('cssjs')->register_js('jquery', array('src' => __WWW_ROOT_JSTOOLS__ . '/skin/jquery/jquery.min.js'));
}
$this->getModel('cssjs')->register_css('jquery.colorbox', array('src' => __WWW_ROOT_JSTOOLS__ . '/skin/colorbox/colorbox.css', 'media' => 'screen'));
$this->getModel('cssjs')->register_js('jquery.colorbox', array('src' => __WWW_ROOT_JSTOOLS__ . '/skin/colorbox/jquery.colorbox-min.js'));
$this->getParentBlock($data);
?>
