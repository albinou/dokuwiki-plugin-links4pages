<?php

namespace dokuwiki\plugin\links4pages;

use dokuwiki\Menu\Item\AbstractItem;

/**
 * Class MenuItem
 *
 * Implements the link button for DokuWiki's menu system
 *
 * @package dokuwiki\plugin\links4pages
 */
class MenuItem extends AbstractItem {

    /** @var string name of the action, usually the lowercase class name */
    protected $type = 'show';

    /** @var string text identifier used to call getLang() */
    private $btn_txt_id = '';

    /**
     * MenuItem constructor.
     *
     * Sets the page $id to link to
     */
    public function __construct($id, $label, $svg_id) {
        parent::__construct();
        $this->id = $id;
        if (empty($label)) {
            global $lang;
            $this->label = $lang['skip_to_content'] . ' "' . $id . '"';
        } else {
            $this->label = $label;
        }
        if (empty($svg_id)) {
            $this->svg = __DIR__ . '/images/file-question.svg';
        } else {
            $this->svg = mediaFN($svg_id);
        }
    }

}
