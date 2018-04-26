<h1> do you want to delete <?= hoi ?> ? </h1>
<form action="<?= URL ?>hospital/delete/<?= hoi ?>" method='post'>
<input type="submit" name="yes" value="yes">
<input type="submit" name="no" value="no">
</form>