<?php

require_once('include/MVC/View/SugarView.php');

class ContactsViewModuleHealthCheck extends SugarView
{
    public function display()
    {
        echo "<h2>Module Health Check</h2>";
        
        echo "
        <table class='list view' style='width:50%;'>
            <thead>
                <tr>
                    <th>Module Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Accounts</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>Contacts</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>Leads</td>
                    <td>Shut down for temporary purpose</td>
                </tr>
            </tbody>
        </table>
        ";
    }
}
