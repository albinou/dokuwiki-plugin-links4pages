<?php
/**
 * Default settings for the links4pages plugin
 *
 * @author Albin Kauffmann <albin@kauff.org>
 */

for ($i = 1; $i <= 3; $i++) {
    $meta[sprintf("%'.02d_id",     $i)] = '';
    $meta[sprintf("%'.02d_label",  $i)] = '';
    $meta[sprintf("%'.02d_svg_id", $i)] = '';
    $meta[sprintf("%'.02d_pos",    $i)] = 0;
}
