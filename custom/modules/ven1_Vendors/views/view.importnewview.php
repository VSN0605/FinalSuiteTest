<?php

require_once('include/MVC/View/SugarView.php');

class ven1_VendorsViewImportNewView extends SugarView
{
    public function display()
    {   
        echo "<h2>Import New - Custom Static Message</h2>";
        echo "<p>This is a custom page loaded through custom controller action.</p>";
    }  
}
          