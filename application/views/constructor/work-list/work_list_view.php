<?php echo $this->benchmark->memory_usage(); ?>

<div class="deal-list">


    <?php foreach($deals as $deal): ?>
        <div class="deal-item">
            <span class="deal-item-title"><?=$deal['title'];?></span>
            <p class="deal-item-text"><?=$deal['text']; ?></p>
            <div class="deal-item-footer">
                <span><?=$deal['author_name'];?>
                </span><span><?=$deal['comments_count'];?> Comments</span>
                <span><?=$deal['discipline'];?></span>
                <span>Pub Date <?=$deal['pubdate'];?></span>
            </div>
            <div class="deal-item-btn-box">
                <a href="#" class="deal-item-btn">Read more</a>
            </div>
        </div>
    <?php endforeach; ?>


</div>

