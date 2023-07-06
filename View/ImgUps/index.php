<h2>追加した画像</h2>
<ul>
<?php foreach ($imgs as $img) : ?>
    <li><?php echo ($this->BcBaser->link("/img_up/img_ups/contents/{$img['ImgUp']['image_name']}", "/img_up/img_ups/contents/{$img['ImgUp']['image_name']}"));?></li>
<?php endforeach ?>
</ul>