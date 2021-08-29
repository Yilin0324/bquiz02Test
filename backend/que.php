<fieldset style="width:80%;margin:auto">
    <legend>新增問卷</legend>
    <form action="api/admin_que.php" method="post">
        <div style="display:flex">
            <div class="clo" style="width:40%">問卷名稱</div>
            <div style="width:60%">
                <input type="text" name="subject" style="width:95%">
            </div>
        </div>
        <div id="options">
            選項 <input type="text" name="opts[]" style="width:80%">
            <input type="button" value="更多" onclick="more()">
        </div>
        <div>
            <input type="submit" value="新增">
            <input type="reset" value="清空">
        </div>
    </form>
</fieldset>

<!-- 問卷列表 -->
<fieldset style="width:80%;margin:auto">
    <legend>問卷列表</legend>
    <form action="api/save_sh.php" method="post">
    <table>
        <tr class="clo ct">
            <td>問卷名稱</td>
            <td style="width:10%">投票數</td>
            <td style="width:10%">開放</td>
        </tr>

        <?php
    $ques=$Que->all(['parent'=>0]);
    foreach ($ques as $key => $que) {
    ?>

        <tr>
            <td><?=($key+1).".".$que['text'];?></td>
            <td class="ct"><?=$que['vote'];?></td>
            <td class="ct">
            <input type="checkbox" name="sh[]" value="<?= $que['id'];?>"
                    <?= ($que['sh']==1)?"checked":"";?>
                    >
            </td>
            <input type="hidden" name="id[]" value="<?=$que['id'];?>">
        </tr>
        
        <?php
    }
    ?>
        <tr>
            <td>
                <input type="submit" value="修改確定">
                <input type="hidden" name="id[]" value="<?=$que['id'];?>">
            </td>
        </tr>
    </form>
    </table>
</fieldset>

<script>
    function more(){
        let opt=`選項 <input type="text" name="opts[]" style="width:80%"><br>`
        $("#options").prepend(opt)
    }

</script>