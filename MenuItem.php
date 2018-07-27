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
    public function __construct($id, $menu_item_type) {
        parent::__construct();
        $this->id = $id;
        switch ($menu_item_type) {
            case "new_page":
                $this->btn_txt_id = 'btn_new_page';
                $this->svg = __DIR__ . '/images/file-plus.svg';
                break;
            default:
                $this->btn_txt_id = 'btn_unknown';
                $this->svg = __DIR__ . '/images/file-question.svg';
                break;
        }
    }

    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {
        $hlp = plugin_load('action', 'links4pages');
        return $hlp->getLang($this->btn_txt_id);
    }

}
