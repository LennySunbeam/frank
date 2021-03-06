<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="custom" type="text/css" href="/styles/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".menuCheckbutton").on('click', function () {
                $(this).toggleClass('contrast');
                if ($(this).hasClass("active"))
                    $(this).parent().parent().parent().find("#menuCheckbox").prop('checked', true);
                else
                    $(this).parent().parent().parent().find("#menuCheckbox").prop('checked', false);
            });
        });
    </script>
    <title>Frank Leeroy</title>

<?php wp_head();?>

</head>