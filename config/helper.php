<?php
function admin_url( $url = "")
{
    return "http://localhost/ITTrainingNepalCourse/phpnewsportal23feb/admin/$url";
}

function public_path($path="")
{
    return dirname (__DIR__)."/public/$path";
}
?>