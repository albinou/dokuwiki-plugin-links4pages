<?php
/**
 * English language file for links4pages plugin
 *
 * @author Albin Kauffmann <albin@kauff.org>
 */

for ($i = 1; $i <= 3; $i++) {
    $lang[sprintf("%'.02d_id",     $i)] = sprintf("Button %d / Page ID link", $i);
    $lang[sprintf("%'.02d_label",  $i)] = sprintf("Button %d / Link label", $i);
    $lang[sprintf("%'.02d_svg_id", $i)] = sprintf("Button %d / Media ID (SVG)", $i);
    $lang[sprintf("%'.02d_pos",    $i)] = sprintf("Button %d / Position of the link", $i);
}
