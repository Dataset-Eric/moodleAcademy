<?php
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
