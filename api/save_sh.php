<?php include_once "../base.php";

foreach ($_POST['id'] as $id) {

        $ques=$Que->find($id);

        $ques['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $Que->save($ques);


}
to("../backend.php?do=que");
