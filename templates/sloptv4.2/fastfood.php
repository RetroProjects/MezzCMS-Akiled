<?php
/**
 * The FastFood Game
 *
 * Add fastfood.php in the following directory:
 *
 * /templates/{template}/fastfood.php
 *
 * The game will work on the following path: {your_domain}/fastfood
 *
 * @param $fastFoodData
 * @param bool $onMySite
 */
function newFastFood($fastFoodData, $onMySite = false)
{
    $fastFoodData = http_build_query($fastFoodData);

    $fastFoodClient = stream_context_create(array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $fastFoodData
        )
    ));

    $server_output = file_get_contents('https://api.thefastfoodgame.com/api', false, $fastFoodClient);

    // Is there an empty input?
    if($server_output == "")
    {
        exit("FastFood error: Server error. 500.");
    }

    // Decode return data
    $data = json_decode($server_output);

    // No errors?
    if (json_last_error() == JSON_ERROR_NONE)
    {
        // API return error?
        if($data->status == 'error')
        {
            echo '<div style="margin: 20px 0; background-color: #c5000e; padding: 10px; color: #FFFFFF;">';
            echo '<b>API error 500:</b>';
            echo '<div style="padding-top: 10px;">'. $data->message .'</div>';
            echo '</div>';
        }
        else
        {
            // Redirect
            if(!$onMySite) {
                header("Location: " . $data->url);

                echo '<meta http-equiv="refresh" content="0; URL=' . $data->url . '">';
                exit("We are redirecting you to FastFood. <a href='" . $data->url . "'>Click here when nothing happens</a>");
            }

            // Current URL
            else
            {
                exit(file_get_contents($data->url));
            }
        }
    }
    else
    {
        // Decoding error
        exit("FastFood cannot connect. Error: " . $server_output);
    }
    exit;
}

// Checking if the user is logged in
if(!is_numeric(User::userData('id')))
{
    header("Location: /");

    echo '<meta http-equiv="refresh" content="0; URL=/">';
    exit("You are not logged in. Turn back to the homepage. <a href='/'>Click here when nothing happens</a>");
}

newFastFood([
    'api-key' => '041214-17C0CB-DBC8F5-7F1DD6-7C6673',
    'user-id' => User::userData('id'),
    'user-name' => User::userData('username'),
    'user-avatar' => User::userData('look'),
    'theme' => 'default'
], true);