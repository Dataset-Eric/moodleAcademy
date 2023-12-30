<?php
/**
 * @copyright 2023 Eric Wauthion
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package local_greetings
 * @category string
 * @author Eric Wauthion
 *
 */
namespace local\greetings\form;
defined('MOODLE_INTERNAL') || die();
require_once $CFG->libdir . '/formslib.php';

class messageform extends \moodleform {
    // Add elements to form.
    public function definition() {
        // A reference to the form is stored in $this->form.
        // A common convention is to store it in a variable, such as `$mform`.
        $mform = $this->_form;
        // Ajoute une zone de texte pour insérer un message
        $mform->addElement('textarea', 'message', get_string('yourmessage','local_greetings'));
        // Définit le type de la zone de texte
        $mform->setType('message', PARAM_TEXT);
        // Ajoute un bouton pour soumettre
        $submitlabel = get_string('submit');
        $mform->addElement('submit', 'submitmessage', $submitlabel);
        $mform->addElement('cancel', 'cancelmessage', get_string('cancel'));
    }
    // Custom validation should be added here.
    function validation($data, $files) {
        return [];
    }
}
