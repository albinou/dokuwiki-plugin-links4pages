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

    /** @var string icon file */
    protected $svg = __DIR__ . '/images/file-plus.svg';

    /**
     * MenuItem constructor.
     *
     * Sets the page $id to link to
     */
    public function __construct() {
        parent::__construct();
        $this->id = 'wiki:add-page';
    }

    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {
        $hlp = plugin_load('action', 'links4pages');
        return $hlp->getLang('btn_add_new_page');
    }

}
