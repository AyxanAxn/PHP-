<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    </head>
    <body>
        <header class="bg-dark bg-opacity-25 py-4">
            <h1 class="container">Website title</h1>
        </header>
        <div class="container">   
            <main class="row">
                <nav class="col-md-3 bg-dark bg-opacity-10">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                <?php
                    for($i = 0; $i < count($langs); $i++){
                        echo '<a href="?lang='.$langs[$i].'" type="button" class="'.($langs[$i]==$lang ? "active":"").' btn btn-outline-primary">'.$langs[$i].'</a>';
                    }
                ?>
                </div>
                    <ul class="nav flex-column">

                    <?php
                        foreach($menu[$lang] as $f=>$m){
                            echo'
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?page='.$f.'">'.$m.'</a>
                            </li>
                            ';
                        }
                    ?>
                      

                    </ul>
                </nav>
                <section class="col-md-9">