<?php

include_once 'config/init.php';

$job = new Job();


$template = new Template('templates/job-single.php');

$job_id = isset($_GET['job_id']) ? $_GET['job_id'] : null;




$template->job = $job->getJob($job_id);
echo $template;