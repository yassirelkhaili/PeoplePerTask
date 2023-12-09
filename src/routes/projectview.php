<?php 
require "../auth/config/mysqli.php";
require "../auth/fetch.php";
use fetchdata\Fetch;

if (isset($_GET["id"])) {
$id = $_GET["id"];
$fetch = new Fetch($mysqli);
$project = $fetch->fetchProjectByID($id);
$projectTags = explode(",", $project["tags"] ?? '');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="./tinymce/tinymce.min.js"></script>
    <script src="../../dist\sandbox.js"></script>
    <title>PeoplePerTask</title>
</head>
<body style="background-color: #111827; overflow-x: hidden;" class="text-slate-50">
    <header style="padding-top: 10px;">
        <h1 class="text-center text-2xl mb-4 text-[#FE8D4D]"></h1>
    </header>
    <main class="flex flex-col gap-2">
        <?php if (isset($project)) : ?>
           <div>
           <h1>Project Title: <?= $project["projectTitle"] ?></h1>
            <h2>Client name: <span><?= $project["username"] ?></span></h2>
           </div>
            <div>
            <h2>Project Description:</h2>
            <p><?= $project["projectDesc"] ?></p>
            </div>
            <div>
            <h2>Category:</h2>
            <p><?= $project["categoryName"] ?></p>
            </div>
            <div>
            <h2>Sub_category:</h2>
            <p><?= $project["sub_categoryName"] ?></p>
            </div>
           <div>
           <h2>Project Tags:</h2>
            <?php if (isset($project["tags"])) : ?>
    <div class="flex gap-2">
        <?php foreach ($projectTags as $key => $projectTag) : ?>
            <p><?= $projectTag ?></p>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>No tags set for this project</p>
<?php endif; ?>
           </div>
<?php endif; ?>
    </main>
    <footer>
    </footer>
</body>
</html>