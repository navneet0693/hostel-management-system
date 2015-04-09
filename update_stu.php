<?php
include 'connections.php';

$v1=(int)$_POST['stuid'];
if(!$v1)
{
    ?><div class="alert alert-danger">
    <a href="#" class="alert-link">Enter a Student Id!!!</a>
</div>
<?php
}
else
{
    $v2=$_POST['stuna'];
    $v3=$_POST['stucourse'];$v4=$_POST['stuemail'];
    $v5=$_POST['studob']; $v6=(int)$_POST['stucon'];
    $v7=$_POST['stunation'];$v8=$_POST['stublood'];
    $v9=$_POST['stufanm'];$v10=$_POST['stumanm'];$v11=$_POST['stucity'];
    $v12=$_POST['stustate'] ;$v13=$_POST['stuhost'];

    $v14=$_POST['log1na'];
    $v15=(int)$_POST['log1con'];
    $v16=$_POST['log1rel'];
    $v17=$_POST['log2na'];
    $v18=(int)$_POST['log2con'];
    $v19=$_POST['log2rel'];

    $sql="UPDATE student set stuna='$v2',stucourse='$v3',stuemail='$v4',studob='$v5',stucon=$v6,stunation='$v7',stublood='$v8',stufanm='$v9',stumanm='$v10',stucity='$v11',stustate='$v12' where stuid=$v1";
    if($sql==NULL)
    {
        ?>
        <div class="alert alert-danger">
            <a href="#" class="alert-link">No such studentId present!!!</a>
        </div>
    <?php
    }
    else
    {
        if(!mysql_query($sql))
        {
            header("location:stu_display.php");
        }
        else
        {
            header("location:admin.php");
        }
    }
}
mysql_close($link);
?>
