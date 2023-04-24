<?php
// Load the XML file into a SimpleXMLElement object
$xml = simplexml_load_file('C:/xampp/htdocs/jobboard/jobs.xml');

// Get the data from the form
$title = $_POST['title'];
$description = $_POST['description'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$companies = $_POST['companies'];

// Validate the input
if (empty($title) || empty($description) || empty($skills) || empty($education) || empty($experience)) {
    die('Error: All fields are required.');
}

// Add the job to the XML list
$job = $xml->addChild('job');
$job->addChild('title', $title);
$job->addChild('description', $description);
$skillsList = $job->addChild('skills');
foreach (explode(',', $skills) as $skill) {
    $skillsList->addChild('skill', trim($skill));
}
$educationList = $job->addChild('education');
foreach (explode(',', $education) as $field) {
    $educationList->addChild('field', trim($field));
}
$job->addChild('experience', $experience);
if (!empty($companies)) {
    $companiesList = $job->addChild('companies');
    foreach (explode(',', $companies) as $company) {
        $companiesList->addChild('company', trim($company));
    }
}

// Save the updated XML to
$xml->asXML('C:/xampp/htdocs/jobboard/jobs.xml');

echo 'Job submitted successfully.';
?>