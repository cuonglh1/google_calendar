<?php
    function createClient() {
        $client = new Google_Client();
        $client->setApplicationName("cuonglh97");
        $client->setDeveloperKey('AIzaSyAW4A8PlrbhZOYe6TqSzOKc5JNhQActL_Y');
        $client->setClientId('1024382131169-mh2l58ssk3g90jrfb3aptrl47c4fcqvf.apps.googleusercontent.com');
        $client->setClientSecret('33Y5rspt4TkeU-e4jW-5xO9m');
        $client->setRedirectUri('http://localhost/google_calendar/google_calendar_object');
        return $client;
    }
?>