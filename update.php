<?php
include "db.php";
if (isset($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conn->prepare("select* from book1 where id=?");
    $sql->bind_param("i",$id);
    $sql->execute();
    $user= $sql->get_result()->fetch_assoc();
    
    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $title=$_POST["title"];
        $author=$_POST["author"];
         $genre=$_POST["genre"];
        $copy=$_POST["copy"];
        $avail=$_POST["avail"];
        $sql=$conn->prepare("update book1 set title=?,author=?,genre=?,copy=?,avail=? where id=?");
        $sql->bind_param("sssiii",$title,$author,$genre,$copy,$avail,$id);
        if ($sql->execute()) {
            header("Location:book1.php");
        }
    }}
    
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#"> Hello      <?php echo $_SESSION["user"] ?></a>
                    <!-- <h5>Hello <?php echo $_SESSION["user"] ?></h5> -->
                    <form action="logout.php" method="POST">
                           <button type="submit" class="bg-primary rounded p-1">Logout</button>
                            
                        </form>
                </div>
            </nav>
            
        </header>
        <main>
            <h3 class="text-center my-3">Employee Data</h3>
            <div
                class="container my-4 col-5 p-5 rounded shadow"
            >
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user["title"]; ?>"
                            
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Author </label>
                        <input
                            type="text"
                            class="form-control"
                            name="author"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user["author"]; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Genre </label>
                        <input
                            type="text"
                            class="form-control"
                            name="genre"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user["genre"]; ?>"
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Total Copies </label>
                        <input
                            type="text"
                            class="form-control"
                            name="copy"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user["copy"]; ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Available Copies </label>
                        <input
                            type="text"
                            class="form-control"
                            name="avail"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user["avail"]; ?>"
                        />
                        
                    </div>
                    
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
