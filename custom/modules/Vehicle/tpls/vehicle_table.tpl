<table class="list view" border="0" cellspacing="1" cellpadding="0" width="100%">
    <thead>
        <tr class="listViewThS1">
            <th>Vehicle Name</th>
            <th>Vehicle Model</th>
            <th>Vehicle Color</th>
            <th>Deleted</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop through the data assigned in the PHP view -->
        {foreach from=$VEHICLE_TABLE_DATA item=row}
            <tr class="evenListRowS1">
                <td>{$row.name}</td>
                <td>{$row.model}</td>
                <td>{$row.color}</td>
                <td>{($row.deleted == 1) ? "Deleted" : "Not Deleted"}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
