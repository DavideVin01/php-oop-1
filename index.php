<?php
class Movie
{
    public $title;
    public $year;
    public $author;
    public $description;

    public function __construct($title, $year, $author, $description)
    {
        $this->title = $title;
        $this->year = $year;
        $this->author = $author;
        $this->description = $description;
    }

    public function getAbstract()
    {
        return substr($this->description, 0, 50) . '...';
    }
}

$text1 = 'The Games are a televised event in which the participants, called "tributes", are forced to fight to the death in a dangerous public arena. The winning tribute and his or her home district are then rewarded with food, supplies, and riches.';

$text2 = 'Harry Potter and the Philosopher\'s Stone is an enthralling start to Harry\'s journey toward coming to terms with his past and facing his future. It was the first book written by Rowling, and she was praised for creating well-rounded characters and a fully realized wizard universe that coexisted with the present world.';

$movie1 = new Movie('Hunger Games', '2012', 'Suzanne Collins', $text1);
$movie2 = new Movie('Harry Potter: Philosopher\'s Stone', '1997', 'J. K. Rowling', $text2);

var_dump($movie1);
var_dump($movie2);

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($movies as $movie) :
        $movie_obj = new Movie($movie['title'], $movie['year'], $movie['author'], $movie['description']);
    ?>
        <article>
            <h1><?= $movie_obj->title ?></h1>
            <div><?= $movie_obj->year ?></div>
            <p><?= $movie_obj->description ?></p>
            <address><?= $movie_obj->author ?></address>
        </article>
    <?php endforeach; ?>
</body>

</html> -->