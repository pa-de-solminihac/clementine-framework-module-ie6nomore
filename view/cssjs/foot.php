<?php
if (!isset($data['ie6nomore_started'])) {
?>
<script type="text/javascript">
//<![CDATA[
<!--
    // au document.ready : les elements externes ne sont pas encore charges, on n'a pas besoin de leurs dimensions
    jQuery(window).load(function() {
        // alerte modale si le navigateur est IE6
        if (jQuery.browser.msie && jQuery.browser.version <= '7.') {
            jQuery.fn.colorbox({
                href: '<?php echo __WWW__ . '/ie6nomore'; ?>',
                overlayClose: false,
                iframe:true,
                innerWidth:700,
                innerHeight:500,
                arrowKey:"false",
                rel:'nofollow',
                scrolling:'',
                opacity:'0.7'
            });
        }
    });
-->
//]]>
</script>
<?php
}
$this->getParentBlock($data);
?>
