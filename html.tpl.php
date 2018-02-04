<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html>
        <head>
                <?php print $head; ?>
                <title><?php print $head_title; ?></title>
                <?php print $styles; ?>
                <?php print $scripts; ?>
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>
        <body class="<?php print $classes; ?>" <?php print $attributes;?>>
                <?php print $page_top; ?>
                <?php print $page; ?>
                <?php print $page_bottom; ?>
        </body>
</html>