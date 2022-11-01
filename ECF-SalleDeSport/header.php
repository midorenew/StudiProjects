<?php
    $siteName = "Partenariat Services"; // Site name
    $pageTitle;                         // Page Title

    // If Page Title is not set, only the Site Name is displayed
    if (isset($pageTitle)){
        echo "<title>" . $pageTitle ." | ". $siteName . "</title>";
    }
    else {
        echo "<title>" . $siteName . "</title>";
    }
?>