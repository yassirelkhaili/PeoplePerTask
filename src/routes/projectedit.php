<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    echo htmlspecialchars($_POST["description"], ENT_QUOTES, 'UTF-8');
}
?>

<?php
    require("../auth/fetch.php");
    require("../auth/config/mysqli.php");
    use fetchdata\fetch;
    //get projectID
    $projectID = $_GET["id"];
    $fetch = new fetch($mysqli);
    $categories = $fetch->fetchCategories();
    $sub_categories = $fetch->fetchSub_Categories();
    $project = $fetch->fetchProjectByID($projectID);
?>

<?php
   //handle form submission && image upload

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    echo $targetFile;
    // move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // // Insert image path into the database
    // $imagePath = $targetFile;
    // $sql = "INSERT INTO images (image_path) VALUES ('$imagePath')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Image uploaded and path saved in the database successfully.";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="./tinymce/tinymce.min.js"></script>
    <title>PeoplePerTask</title>
</head>
<body style="background-color: #111827; overflow-x: hidden;">
    <header style="padding-top: 10px;">
        <h1 class="text-center text-2xl mb-4 text-[#FE8D4D]">Edit Project</h1>
    </header>
    <main style="width: 100vw; display: flex; justify-content: center; align-items: center;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="flex justify-center items-start flex-col" style="max-width: 800px;" enctype="multipart/form-data">
            <label for="desc" class="text-xl text-[#FE8D4D]" style="padding-bottom: 1rem; padding-top: 1rem;">Title:</label> 
            <input type="text" id="title" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple text-defaultText" placeholder="title" value=<?= $project["projectTitle"] ?>>
            <label for="desc" class="text-xl text-[#FE8D4D]" style="padding-bottom: 1rem; padding-top: 1rem;">Image:</label>
            <input type="file" name="image" accept="image/*" class="text-slate-50">
            <label for="category" class="text-xl text-[#FE8D4D]" style="padding-bottom: 1rem; padding-top: 1rem;">Category:</label> 
            <select name="sub_categoryID" id="selectuserID" data-categories="" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple text-defaultText">
                <option disabled="" selected>select category</option>
                <?php foreach ( $categories as $category ): ?>
                    <option value=<?= $category["categoryID"] ?> <?= intval($category["categoryID"]) === $project["categoryID"] ? 'selected' : '' ?>><?= $category["categoryName"] ?></option>
                <?php endforeach; ?> 
            </select>
            <label for="category" class="text-xl text-[#FE8D4D]" style="padding-bottom: 1rem; padding-top: 1rem;">Sub_Category:</label> 
            <select name="sub_categoryID" id="selectuserID" data-sub_categories="" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple text-defaultText">
                <option disabled="" selected>select sub_category</option>
                <?php foreach ( $sub_categories as $sub_category ): ?>
                    <option value=<?= $sub_category["sub_categoryID"] ?> <?= intval($sub_category["sub_categoryID"]) === $project["sub_categoryID"] ? 'selected' : '' ?>><?= $sub_category["sub_categoryName"] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="desc" class="text-xl text-[#FE8D4D]" style="padding-bottom: 1rem; padding-top: 1rem;">Description:</label>            <textarea name="description" id="desc"></textarea>
            <button type="button" class="focus:outline-none text-white bg-[#FE8D4D] hover:bg-[#F18040] focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-[#F18040]" style="margin-top: 1.2rem;">Submit</button>
        </form>
    </main>
    <footer>
    <script>
            tinymce.init({
                selector: '#desc',
                width: 800,
                height: 400,
                placeholder: "description",
                plugins: [
                    'advlist', 'autolink', 'link', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'emoticons', 'template', 'codesample'
                ],
                toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
                    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                    'forecolor backcolor emoticons',
                menu: {
                    favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
                },
                menubar: 'favs file edit view insert format tools table',
                content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
            });
            tinymce.get('#desc').setContent('<p>default tinymce content</p>');
        </script>
    </footer>
</body>
</html>