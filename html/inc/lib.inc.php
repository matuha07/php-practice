<?php
function drawTable($cols, $rows, $color)
{
    for ($r = 1; $r <= $rows; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $cols; $c++) {
            $value = $r * $c;

            if ($r == 1 || $c == 1) {
                echo "<td style='font-weight:bold; background: $color;'>$value</td>";
            } else {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }
}

function drawMenu($menu, $vertical = true) {
    if ($vertical == true) {
        echo "<ul>";
    } else {
      echo "<ul style='display: flex;'";
    }

    foreach ($menu as $item) {
      echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }

    echo "</ul>";

  }
