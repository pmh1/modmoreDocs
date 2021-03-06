<?php $this->layout('theme::layout/05_page') ?>

<h1 class="Page__Header"><?= $page['breadcrumbs'] ? $this->get_breadcrumb_title($page, $base_page) : $page['title'] ?></h1>

<div class="s-content">
    <?= $page['content']; ?>
</div>

<footer class="editfooter">
    <p>
        Found a typo, is a description unclear or missing completely?
        <a href="https://github.com/modmore/docs/edit/master/<?= $page['relative_path'] ?>" target="_blank">Edit this page</a>
        or
        <a href="https://github.com/modmore/docs/issues/new?title=<?= urlencode($page['title']) ?>&body=On+page+[<?= urlencode($page['title']) ?>](https://github.com/modmore/docs/blob/master/<?= $page['relative_path'] ?>)+there+is+an+issue+with+..." target="_blank">report an issue</a>. Thank you!
    </p>
</footer>
