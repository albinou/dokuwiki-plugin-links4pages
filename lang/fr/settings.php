<?php
/**
 * French language file for links4pages plugin
 *
 * @author Albin Kauffmann <albin@kauff.org>
 */

for ($i = 1; $i <= 3; $i++) {
    $lang[sprintf("%'.02d_id",     $i)] = sprintf("Bouton %d / ID du lien", $i);
    $lang[sprintf("%'.02d_label",  $i)] = sprintf("Bouton %d / Étiquette du lien (label)", $i);
    $lang[sprintf("%'.02d_svg_id", $i)] = sprintf("Bouton %d / ID du media SVG", $i);
    $lang[sprintf("%'.02d_pos",    $i)] = sprintf("Button %d / Position du lien", $i);
}
