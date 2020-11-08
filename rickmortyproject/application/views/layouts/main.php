<!DOCTYPE html>
<html lang="en">
          <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <!-- Meta, title, CSS, favicons, etc. -->
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              
              <meta http-equiv="Expires" content="Tue, 01 Jan 1995 12:12:12 GMT">
              <meta http-equiv="Pragma" content="no-cache">
              
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title><?=$template['title'] ?></title>
              <!-- Latest compiled and minified CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

              <!-- jQuery library -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

              <!-- Latest compiled JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
              <style type="text/css">
              body {
                background-color: #808080;
                margin: 40px;
                font: 16px normal Helvetica, Arial, sans-serif;
                color: #ffffff;
              }
              </style>
          </head>
          <body>
              <input type="hidden" value="<?=base_url()?>" id="base_url"/>
                <?=$template['body'] ?>
                <script src="<?php echo base_url("js/rickmorty.js"); ?>"></script>
          </body>
</html>