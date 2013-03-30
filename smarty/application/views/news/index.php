<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['TITLE'] ?></h2>
    <div id="main">
        <?php echo $news_item['TEXT'] ?>
    </div>
    <p><a href="http://localhost/index.php/news/<?php echo $news_item['SLUG'] ?>">View article</a></p>
 
<?php endforeach ?>