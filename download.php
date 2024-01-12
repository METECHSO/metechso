<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php
    include "style.php";
    ?>
</head>

<?php
$title = "Download Center";
include "header.php";
?>

<div class="page-title-section" style="background-image: url(img/bg/bg-banner.jpg);">
    <div class="container">
        <h1>Download Center</h1>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="download">Download</a>
            </li>
        </ul>
    </div>
</div>
<div class="section-block-grey">
    <div class="container">
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">
            <thead>
                <tr>
                    <th>#</th>
                    <th class="col-md-9 col-xs-9">Name</th>
                    <th class="col-md-2 col-xs-2 text-center">Last Modified</th>
                    <th class="col-md-1 col-xs-1 text-center">Size</th>
                    <th class="col-md-1 col-xs-1 text-center">Download</th>
                </tr>
                <tr class="warning no-result">
                    <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>MAIOD.apk</td>
                    <td class="text-center">2022-09-04</td>
                    <td class="text-center">7.5M</td>
                    <td class="text-center"><a href="#">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include "footer.php";
?>
<?php
include "script.php";
?>