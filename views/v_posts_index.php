<h1>Welcome back <?=$user->first_name;?></h1>

<?php foreach($posts as $post): ?>

<article>

	<div>
		<img src='/uploads/<?=$post['post_user_id']?>.jpg' width='50' height='50' />
		<?=$post['first_name']?> <?=$post['last_name']?> posted:
	</div>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>