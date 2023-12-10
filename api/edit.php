<?php include_once "db.php";

$table=$_POST['table'];
$DB=${ucfirst($table)};
unset($_POST['table']);

foreach($_POST['text'] as $id => $text){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }else{
        $row=$DB->find($id);
        $row['text']=$text;
        if($table=='title'){
             $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
        }else{
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }
        $DB->save($row);
    }
}

to("../back.php?do=$table");

// --------



// dd($_POST);
// $table=$_POST['table'];
// $DB=${ucfirst($table)};
// unset($_POST['table']);
// foreach($_POST['text'] as $id => $text){
//     if(isset($_POST['del']) && in_array($id,$_POST['del'])){
//         // $DB->del($id);
//         // echo $id;
//         $a=$_POST['del'];
//         // dd( $a);
//     }else{
//         echo $id;
//         // echo $text;
//         $row=$DB->find($id);
//         // dd($row);
//         $row['text']=$text;
//         // dd($row['sh']);
//         dd($_POST['sh']);
//         $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
//         // $DB->save($row);
//     }
// }

// // to("../back.php?do=$table");