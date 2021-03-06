<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/custom.css">

    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/jquery.js"></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/bootstrap.js"></script>

</head>
<body>

<!-- Navigation Bar Module -->
<jdoc:include type="modules" name="menu" style="none"/>

<!-- Showcase Module (Analytics) -->
<?php if($this->countModules('showcase')): ?>
    <jdoc:include type="modules" name="showcase" style="none"/>
<?php endif; ?>


    <div class="container">

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <?php if($this->countModules('box1')): ?>
                    <jdoc:include type="modules" name="box1" style="none"/>
                <?php endif; ?>
            </div>

            <div class="col-md-8">
                <?php if($this->countModules('box2')): ?>
                    <jdoc:include type="modules" name="box2" style="none"/>
                <?php endif; ?>
            </div>

        </div>

        <hr>

    </div> <!-- /container -->


<footer class="container">
    <p>&copy; Company 2017-2019</p>
</footer>
</body>
</html>