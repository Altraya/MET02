{include file='include/meta.tpl'}
<body>
    {include file='include/header.tpl'}
    <section id="bodyPage" class="container">
        {block name=body}{/block}
    </section>
    {include file='include/footer.tpl'}
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/autocomplete.js"></script>
    {block name=jsblock}{/block}
</body>
