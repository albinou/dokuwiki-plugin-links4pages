<?php
/**
 * DokuWiki Plugin links4pages (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Albin Kauffmann <albin@kauff.org>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class action_plugin_links4pages extends DokuWiki_Action_Plugin
{

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     *
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('MENU_ITEMS_ASSEMBLY', 'AFTER', $this, 'handle_menu_items_assembly');
    }

    /**
     * [Custom event handler which performs action]
     *
     * Called for event:
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     *
     * @return void
     */
    public function handle_menu_items_assembly(Doku_Event $event, $param)
    {
        if($event->data['view'] == 'page') {
            $i = 1;
            while ($i < 3) {
                $id = $this->getConf(sprintf("%'.02d_id", $i));
                if (!empty($id)) {
                    $label = $this->getConf(sprintf("%'.02d_label", $i));
                    $svg_id = $this->getConf(sprintf("%'.02d_svg_id", $i));
                    $pos = $this->getConf(sprintf("%'.02d_pos", $i));
                    array_splice($event->data['items'], intval($pos), 0,
                        [new \dokuwiki\plugin\links4pages\MenuItem($id, $label,
                                                                   $svg_id)]);
                }
                $i = $i + 1;
            }
        }
    }

}
