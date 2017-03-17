<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Calling page header. $header instance reffers the Home controller's array elements-->
        <?php echo $head; ?>
    </head>

    <body>
        <div class="container wrapper">

            <div class = "row">

                <div class = "col-md-12">
                    <?php echo $header; ?>
                </div>
            </div>

            <div class = "row">

                <div class = "col-md-4">
                    <?php echo 'Left navigation'; ?>
                </div>

                <div class = "col-md-8">
                    <?php echo $view_contents; ?>
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-12">
                    <?php echo $footer; ?>
                </div>
            </div>

            <?php echo $foot; ?>

        </div>
    </body>
</html>