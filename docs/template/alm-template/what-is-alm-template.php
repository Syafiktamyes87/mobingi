<?php
include_once __DIR__.'/../header.php';

require __DIR__.'/../Parsedown.php';
require __DIR__.'/../ParsedownExtra.php';
require __DIR__.'/../ParsedownExtraPlugin.php';

// $Parsedown = new Parsedown();
$parser = new ParsedownExtraPlugin();

$content = file_get_contents(realpath(__DIR__ . '/../..').'/markdown/alm-template/doc-what-is-alm-template.md');


?>


<!-- Sidebar -->

    <!-- Sidebar -->
    <aside class="col-sm-3 sidebar">
        <?php include_once realpath(__DIR__ . '/../..').'/markdown/alm-template/doc-alm-template-sidebar.md.php'; ?>
    </aside>
    <!-- END Sidebar -->

<!-- END Sidebar -->


<!-- Main content -->
<article class="col-sm-9 main-content" role="main">
    <header>
        <h1>What is ALM Template</h1>
    </header>

    <?php echo $parser->text($content); ?>

</article>


<?php include_once __DIR__.'/../footer.php'; ?>
<script type="text/javascript">
$("table").addClass("table table-bordered table-striped");
$("a[href='<?php echo $siteUrl; ?>what-is-alm-template']").parent('li').addClass("active");
</script>