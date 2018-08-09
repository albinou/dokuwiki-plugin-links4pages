<?php
/**
 * Options for the links4pages plugin
 *
 * @author Albin Kauffmann <albin@kauff.org>
 */

for ($i = 1; $i <= 3; $i++) {
    $meta[sprintf("%'.02d_id",     $i)] = array('string');
    $meta[sprintf("%'.02d_label",  $i)] = array('string');
    $meta[sprintf("%'.02d_svg_id", $i)] = array('string');
    $meta[sprintf("%'.02d_pos",    $i)] = array('numeric');
}
