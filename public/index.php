<?php

require_once '../app.php';

/* Routing */

$app->get('/experience/', 'experience.controller:indexAction');
$app->get('/experience/show/{userid}', 'experience.controller:showAction');
$app->get('/experience/update/{userid}/{mutation}', 'experience.controller:updateAction');

$app->post('/webhook/zendesk', 'webhook.controller:handleZendeskAction');

$app->run();