<?php
require_once("config/page-config.php");

echo START;

echo "<title>Fryksdalens Fårfarm - start</title>";

echo INCLUDES;
echo "<link rel='stylesheet' href='css/nav-bar.css'>";

echo BODY;

require_once("content/nav-bar.html");
require_once("content/start.html");

echo JS;

echo END;
