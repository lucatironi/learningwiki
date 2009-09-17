<?php
/**
 * DokuWiki Template Learning WiKi Functions
 * 
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Luca Tironi <luca.tironi@gmail.com>
 */

/**
 * Renders the navbar
 *
 * @author Luca Tironi <luca.tironi@gmail.com>
 */

function tpl_navbar() {
    global $ID;

    $found = false;
    $navbar  = '';
    $path  = explode(':', $ID);

    while(!$found && count($path) >= 0) {
        $navbar = implode(':', $path) . ':' . 'navigation';
        $found = @file_exists(wikiFN($navbar));
        array_pop($path);
        // check if nothing was found
        if(!$found && $navbar == ':navigation') return;
    }

    if($found && auth_quickaclcheck($navbar) >= AUTH_READ) {
        print p_wiki_xhtml($navbar,'',false);
    }
}
