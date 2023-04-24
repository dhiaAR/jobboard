<html>
    <head></head>
    <body>

    <?php
// Load the XML file
$xml = simplexml_load_file('C:/xampp/htdocs/jobboard/jobs.xml');

// Loop through each job
foreach ($xml->job as $job) {
    // Extract the data for this job
    $title = (string) $job->title;
    $description = (string) $job->description;
    $skills = [];
    foreach ($job->skills->skill as $skill) {
        $skills[] = (string) $skill;
    }
    $education = [];
    foreach ($job->education->field as $field) {
        $education[] = (string) $field;
    }
    $experience = (int) $job->experience;
    $companies = [];
    foreach ($job->companies->company as $company) {
        $companies[] = (string) $company;
    }
    
    // Do something with the job data (e.g. display it)
    echo "Title: $title<br>";
    echo "Description: $description<br>";
    echo "Skills: " . implode(", ", $skills) . "<br>";
    echo "Education: " . implode(", ", $education) . "<br>";
    echo "Experience: $experience years<br>";
    echo "Companies: " . implode(", ", $companies) . "<br>";
    echo "<br>";
}
?>

    </body>
</html>
