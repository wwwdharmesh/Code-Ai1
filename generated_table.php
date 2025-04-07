<?php
$columns = 2;
$rows = 2;
$borderColor = '#dedede';
$headerBgColor = '#eceff1';
$headerTextColor = '#000000';
$rowBgColor = '#ffffff';
$rowTextColor = '#000000';

echo '<!DOCTYPE html><html><head><style>table { border: 2px solid $borderColor; width: 100%; border-collapse: collapse; }</style></head><body><table>';
echo '<thead style="background-color: $headerBgColor; color: $headerTextColor;"><tr>';
    echo '<th>Header 1</th>';
    echo '<th>Header 2</th>';echo '</tr></thead><tbody>';

    echo '<tr style="background-color: $rowBgColor; color: $rowTextColor;">';
        echo '<td>Row $i, Col $j</td>';
        echo '<td>Row $i, Col $j</td>';
    echo '</tr>';
    echo '<tr style="background-color: $rowBgColor; color: $rowTextColor;">';
        echo '<td>Row $i, Col $j</td>';
        echo '<td>Row $i, Col $j</td>';
    echo '</tr>';echo '</tbody></table></body></html>';
?>