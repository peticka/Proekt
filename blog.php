<?php
	require_once('include/bootstrap.php');
	require_once('include/header.php');
	$sql = 'SELECT * FROM news';
	$result = db_select($sql);
?>
			<section class="comments">
			<?php foreach($result as $key => $value) : ?>
				<h1 class="commentsTitle"><a href="news.php?id=<?=$value['id']?>"><?=$value['title']?></a></h1>
				<p class="postedBy">Posted on <?=$value['date_added']?> by <a href="news.php?id=<?=$value['id']?>"><?=$value['title']?></a></p>
				<p class="post">
					<?=$value['content']?>
				</p>
			<?php endforeach; ?>
			</section>
			<div class="pagination">
			      <a href="#" class="prev">&lt;</a>
			      <span>1</span>
			      <a href="#">2</a>
			      <a href="#">3</a>
			      <a href="#">4</a>
			      <a href="#">5</a>
			      <a href="#" class="next">&gt;</a>
			</div>
<?php require_once('include/footer.php'); ?>
