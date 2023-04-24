<!DOCTYPE html>
<html>
  <head>
    <title>Job Proposal Form</title>
  </head>
  <body>
    <h1>Job Proposal Form</h1>
    <form method="post" action="submit_job.php">
      <label for="title">Job Title:</label>
      <input type="text" id="title" name="title" required><br><br>
      <label for="description">Job Description:</label>
      <textarea id="description" name="description" required></textarea><br><br>
      <label for="skills">Required Skills (comma separated):</label>
      <input type="text" id="skills" name="skills" required><br><br>
      <label for="education">Required Education (comma separated):</label>
      <input type="text" id="education" name="education" required><br><br>
      <label for="experience">Required Experience (years):</label>
      <input type="number" id="experience" name="experience" required><br><br>
      <label for="companies">Preferred Companies (comma separated):</label>
      <input type="text" id="companies" name="companies"><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
