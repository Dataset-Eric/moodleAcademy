<?php
require_once '../../config.php';
require_once '/local/greetings/lib.php';
$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title($SITE->fullname);
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));

// Affichage des messages.
echo $OUTPUT->header();
echo "<br>" . $USER->username;

// Affichage message en fonction de la langue de l'utilisateur.
echo "<br>". greetings_get_greeting($USER);

echo  "<br>" . get_string('nom', 'local_greetings');
$age = 51;
echo "<br>" .get_string('age', 'local_greetings', $age);
$now = time();
echo "<br>" . userdate($now);
$grade = 20/3;
echo "<br>" .format_float($grade, 2);

echo $OUTPUT->footer();
