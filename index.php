<?php
require_once('../../config.php');
$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));
echo $OUTPUT->header();
if (isloggedin()) {
    echo '<h3>Greetings, ' . fullname($USER) . '</h3>';
} else {
    echo '<h3>Greetings, user</h3>';
}
echo $OUTPUT->footer();