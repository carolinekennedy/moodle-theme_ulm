<ul id="imageslider" class="<?php echo $hideonphone ?>">

<?php if ($hasimage1) { ?>
    <li>
        <?php if ($hasimage1url) { ?>
        <a href="<?php echo $image1url ?>">
        <?php } ?>
            <img src="<?php echo $image1image ?>" <?php if($hasimage1caption) { ?>alt="<?php echo $image1caption ?>"<?php } ?> />
        <?php if ($hasimage1url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>

<?php if ($hasimage2) { ?>
    <li>
        <?php if ($hasimage2url) { ?>
        <a href="<?php echo $image2url ?>">
        <?php } ?>
            <img src="<?php echo $image2image ?>" <?php if($hasimage2caption) { ?>alt="<?php echo $image2caption ?>"<?php } ?> />
        <?php if ($hasimage2url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>

<?php if ($hasimage3) { ?>
    <li>
        <?php if ($hasimage3url) { ?>
        <a href="<?php echo $image3url ?>">
        <?php } ?>
            <img src="<?php echo $image3image ?>" <?php if($hasimage3caption) { ?>alt="<?php echo $image3caption ?>"<?php } ?> />
        <?php if ($hasimage3url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>

<?php if ($hasimage4) { ?>
    <li>
        <?php if ($hasimage4url) { ?>
        <a href="<?php echo $image4url ?>">
        <?php } ?>
            <img src="<?php echo $image4image ?>" <?php if($hasimage4caption) { ?>alt="<?php echo $image4caption ?>"<?php } ?> />
        <?php if ($hasimage4url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>

<?php if ($hasimage5) { ?>
    <li>
        <?php if ($hasimage5url) { ?>
        <a href="<?php echo $image5url ?>">
        <?php } ?>
            <img src="<?php echo $image5image ?>" <?php if($hasimage5caption) { ?>alt="<?php echo $image5caption ?>"<?php } ?> />
        <?php if ($hasimage5url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>

<?php if ($hasimage6) { ?>
    <li>
        <?php if ($hasimage6url) { ?>
        <a href="<?php echo $image6url ?>">
        <?php } ?>
            <img src="<?php echo $image6image ?>" <?php if($hasimage6caption) { ?>alt="<?php echo $image6caption ?>"<?php } ?> />
        <?php if ($hasimage6url) { ?>
        </a>
        <?php } ?>
    </li>
<?php } ?>
</ul>
<script>
    $(function () {
        // Slideshow 1
        $("#imageslider").responsiveSlides();
    });
</script>