<?php
    function createClient() {
        $client = new Google_Client();
        $client->setApplicationName("cuongle997");
        $client->setDeveloperKey('AIzaSyBYpZMwwBbM6VKLajU2QgWiBKZcyubc3JA');
        $client->setClientId('212365518350-4k5uk09v7ugtv9iv3rjqsapo0rm0lb2d.apps.googleusercontent.com');
        $client->setClientSecret('H9DZW05dMpiZaSJ2MWclS21Q');
        $client->setRedirectUri('http://localhost/google_calender/google_calendar_object');
        return $client;
    }
?>