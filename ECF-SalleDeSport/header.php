<?php
$siteName = "Partenariat Services";
$pageTitle;

if (isset($pageTitle)){
    echo "<title>" . $pageTitle ." | ". $siteName . "</title>";
}
else {
    echo "<title>" . $siteName . "</title>";
}
?>