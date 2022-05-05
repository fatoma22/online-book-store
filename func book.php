<?php
#get books function
function get _all_ books ($con){
    $sql = "SELECT *FROM books ORDER by id DESC";
    $ STMT $con->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount( )>0){
        $books =$stmt->fetchAll();
    }else{
        $books =0;
    }
    return $books;
}
