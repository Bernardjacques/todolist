<?php


$task->name = "Vaisselle";
$status->bolean = TRUE;

$todo = json_encode($task);

echo $todo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Todo-List</title>
</head>
<body>
    <section class="task_list">
            <h4>À Faire</h4>
                <!-- <div class="task">
                    <input type="checkbox" name="task">
                    Ceci est la première tâche.
                </div>
                <div class="task">
                    <input type="checkbox" name="task2">
                    Ceci est une deuxième tâche.
                </div>
                <div class="task">
                    <input type="checkbox" name="task3">
                    Ceci est une troisième tâche.
                </div>
                <div class="task">
                    <input type="checkbox" name="task3">
                    Ceci est une quatrième tâche.
                </div>
                <div class="task">
                    <input type="checkbox" name="task3">
                    Ceci est une cinquième tâche.
                </div>
                <div class="task">
                    <input type="checkbox" name="task3">
                    Ceci est une sixième tâche.
                </div>
                    <input class="button" type="button" name="save" value="Enregistrer">
        </div> -->
            <h4>Archive</h4>
    <!--
                <div class="archive">
                    <input type="checkbox" value="true" name="task">
                    Ceci est la première tâche effectuée.
                </div>
                <div class="archive">
                    <input type="checkbox" name="task2">
                    Ceci est une deuxième tâche effectuée.
                </div>
                <div class="archive">
                    <input type="checkbox" name="task3">
                    Ceci est une troisième tâche effectuée.
                </div>
                <div class="archive">
                    <input type="checkbox" name="task3">
                    Ceci est une quatrième tâche effectuée.
                </div>
                <div class="archive">
                    <input type="checkbox" name="task3">
                    Ceci est une cinquième tâche effectuée.
                </div>
                <div class="archive">
                    <input type="checkbox" name="task3">
                    Ceci est une sixième tâche effectuée.
                </div>
     -->    
        </div>
    </section>
    
    <section>
        <div class="addtask">
            <h2>Ajouter une Tâche</h2>
            <form action="index.php" method="POST">
                <label for="task">La tâche à effectuer</label>
                <input type="text" name="task" value="">
                <input type="submit" name="ajouter" value="Ajouter">
            </form>
        </div>
    </section>
    </form>
</body>
</html>