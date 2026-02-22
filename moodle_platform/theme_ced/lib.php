<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Serves any files from within the theme.
 */
function theme_ced_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM && $filearea === 'pix') {
        return theme_pluginfile($course, $cm, $context, 'theme_ced', $filearea, $args, $forcedownload, $options);
    }
    return false;
}
