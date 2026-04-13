<?php
include "db.php";
$result=$conn->query("select * from book1");
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $title=$_POST["title"];
    $author=$_POST["author"];
    $genre=$_POST["genre"];
    $copy=$_POST["copy"];
    $avail=$_POST["avail"];
    $sql=$conn->prepare("insert into book1(title,author,genre,copy,avail)values(?,?,?,?,?)");
    $sql->bind_param("sssii",$title,$author,$genre,$copy,$avail);
    if ($sql->execute()) {
        header("Location:book1.php");
    }
}
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
        <link rel="stylesheet" href="register.css">
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#"> Hello      <?php echo $_SESSION["user"] ?></a>
                    <!-- <h5>Hello <?php echo $_SESSION["name"] ?></h5> -->
                    <form action="pdf.php" method="POST">
                           <button type="submit" class="bg-primary rounded p-1">Pdf</button>
                            
                        </form>
                        
                        <form action="logout.php" >
                           <button type="submit" class="bg-primary rounded p-1">Logout</button>
                            
                        </form>
                </div>
                
            </nav>
            
        </header>
        <main>
            <div
                class="container my-4"
            >
               <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"
                    ></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIvsKer8lPI5Mdc7jfiQdcQLLjmJxGFnROEw&s="
                            class="w-100 d-block"
                            alt="First slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSziXRWs7twsUU99j5mlR5_upJceEVovt9Krw&s"
                            class="w-100 d-block"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmQs8xbIseku59onHMpZ6bQ3XaeaSjeLgzMQ&s"
                            class="w-100 d-block"
                            alt="Third slide"
                            height="700px"
                        />
                    </div>
                </div>
               
            
            
            <h3 class="text-center my-3">Books Data</h3>
            <div
                class="container my-4 col-5 p-5 rounded shadow"
            >
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Title Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Author Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="author"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Genre</label>
                        <input
                            type="text"
                            class="form-control"
                            name="genre"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Total Copies</label>
                        <input
                            type="text"
                            class="form-control"
                            name="copy"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Available Copies</label>
                        <input
                            type="text"
                            class="form-control"
                            name="avail"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
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
            <div
                class="container"
            >
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary" style="background: linear-gradient(120deg, red ,green,blue,pink,orange,yellow,white,rgb(0, 255, 255));"
                    >
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Genre</th>
                                <th scope="col"> Total Copies</th>
                                <th scope="col">Available Copies</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php while ($row=$result->fetch_assoc()) {
                            
                        ?>
                        <tbody>
                            <tr class="">
                                <td scope="row"><?= $row["id"];?></td>
                                <td><?= $row["title"];?></td>
                                <td><?= $row["author"];?></td>
                                 <td><?= $row["genre"];?></td>
                                 <td><?= $row["copy"];?></td>
                                 <td><?= $row["avail"];?></td>
                                <td><a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                     href="update.php?id=<?= $row["id"]; ?>"
                                    
                                    role="button"
                                    >Edit</a
                                >
                                </td>
                                <td><a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="delete.php?id=<?= $row["id"]; ?>"
                                    role="button"
                                    >Delete</a
                                >
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                
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
