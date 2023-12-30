<?php
/**
 * Retrieves the appropriate greeting message based on the user's country.
 *
 * @param object $user The user object.
 * @throws Some_Exception_Class Exception thrown if the user object is null.
 * @return string The greeting message.
 */
function greetings_get_greeting ($user){
    if ($user == null) {
        echo "user est null";
        return get_string('greeting', 'local_greetings');
    }
    $country = $user->country;
    echo "<br>pays = " . $country;
    $mess = "";
    switch ($country) {
        case 'AU':
            $mess = get_string('greetinguserau', 'local_greetings', $user->firstname);
            break;
        case 'ES':
            $mess = get_string('greetinguseres', 'local_greetings', $user->firstname);
            break;
        case 'FJ':
            $mess = get_string('greetinguserfj', 'local_greetings', $user->firstname);
            break;
        case 'NZ':
            $mess = get_string('greetingusernz', 'local_greetings', $user->firstname);
            break;
        default:
            $mess = get_string('greeting', 'local_greetings', $user->firstname);
    }
    return $mess;
}

/**
 * Insert a link to index.php on the site front page navigation menu.
 *
 * @param navigation_node $frontpage Node representing the front page in the navigation tree.
 */
function local_greetings_extend_navigation_frontpage(navigation_node $frontpage) {
    $frontpage->add(
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php'),
        navigation_node::TYPE_CUSTOM,
    );
}
/**
 * Add link to index.php into navigation block.
 *
 * @param global_navigation $root Node representing the global navigation tree.
 */
function local_greetings_extend_navigation(global_navigation $root)
{
    $node = navigation_node::create(
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php'),
        navigation_node::TYPE_CUSTOM,
        null,
        null,
        new pix_icon('t/message', '')
    );
    $node->showinflatnavigation = true;
    $root->add_node($node);
}