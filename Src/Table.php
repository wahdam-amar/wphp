<?php

namespace App;

class Table
{

    public function __construct()
    {
        # code...
    }

    public function build_table($array, $caption = null)
    {
        // start table
        $html = '<table>';
        // header row
        $html = ($caption === null) ? $html : $html .= "<caption>{$caption}</caption>";
        $html .= '<thead><tr>';
        foreach ($array[0] as $key => $value) {
            $html .= '<th scope="col">' . htmlspecialchars($key) . '</th>';
        }
        $html .= '</tr></thead><tbody>';

        // data rows
        foreach ($array as $key => $value) {
            $html .= '<tr>';
            foreach ($value as $key2 => $value2) {
                $html .= '<td data-label="' . $key2 . '">' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }

        // finish table and return it

        $html .= '</tbody></table>';
        return $html;
    }
}
