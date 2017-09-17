<?php $z = $_REQUEST['q'];
$f = json_decode($z);
?>

<?php if($f->name == 'Aleks' && $f->email == 'Koba'):?>
    <?php for($z=1;$z<=10;$z++):?>
        <h2><?php echo $z;?></h2>
    <?php endfor;?>

<?php endif; ?>

