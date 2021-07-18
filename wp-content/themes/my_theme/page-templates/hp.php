<?php /* Template Name: Homepage */?>

<?php 
$postID = get_the_ID();
$page = pods('page', $postID);
$banner_desktop = $page->display('banner_desktop');
$banner_mobile = $page->display('banner_mobile');

get_header()?>

<main class="page-content">
    <section class="container">
        <div class="welcome">
            <h1>Welcome to my Wordpress Class</h1>
            <p class="tag-welcome">My first website with wordpress</p>
        </div>
    </section>
    <section class="fullwidth banner">
        <picture>
            <source media="(max-width: 575.98px)" srcset="<?= $banner_mobile?>">
            <img src="<?= $banner_desktop?>" alt="Full banner">
        </picture>
    </section>
    <section class="container">
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
        <h1>TESTE</h1>
    </section>
</main>

<?php get_footer() ?>

