<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Header Responses Generator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <style>
            * {
                margin: 0 auto;
                padding: 0px;
            }
            body {
                background: url("data:image/gif;base64,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");
                color: red;
                font-size: 18px;
            }
            a {
                text-decoration: none;
            }
            .mh_main {
                width: 90%;
            }
            h1 {
                color: #ff0000;
                text-shadow: 0px 3px 4px #fff;
                text-align: center;
                font-size: 50px;
                padding: 20px;
            }
            .box {
                border: 1px solid green;
                padding: 10px;
                border-radius: 0px 5px 5px 5px;
                margin-bottom: 10px;
            }
            .box-header {
                background: green;
                border-radius: 4px 4px 0 0;
                color: #fff;
                display: inline-block;
                margin-top: 20px;
                padding: 10px;
            }
            .box p {
                padding: 5px;
            }
            .box b {
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="mh_main">
            <h1>Header Response Generator - By <a href="http://fb.com/mahbub.hasan.imon">Mahbub Hasan Imon</a></h1>
            <?php
                $fread = file_get_contents("sites.txt");
                $sites = explode(",", $fread);
                foreach ($sites as $site) {
                    $data = get_headers( rtrim($site) );
                ?>
                <div class="box-header">
                    Result of <?= $site;?>
                </div>
                <div class="box">
                <?php
                    foreach ($data as $value) {
                    ?>
                         <p><b>[+]</b> <?=$value;?></p>
                    <?php
                    }
                    ?>
                    </div>
                    <?php
                }
            ?>

        </div>
    </body>
</html>
