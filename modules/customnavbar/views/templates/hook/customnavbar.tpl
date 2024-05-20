
<nav class="custom-navbar">
    <!-- Logo -->
    <div class="navbar-logo">
        <h1> logo </h1>
    </div>

    <!-- Categories -->
    <div class="navbar-categories">
        <ul>
            {foreach from=$categories item=category}
                <li>
                {assign var='categoryLink' value=$category.link_rewrite|escape:'htmlall':'UTF-8'}
                <a href="{$link->getCategoryLink($category.id_category, $categoryLink)}">{$category.name}</a>
                </li>
            {/foreach}
        </ul>
    </div>

    <!-- Icons -->
    <div class="navbar-icons">
        <ul>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="#"><i class="fas fa-user"></i></a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</nav>
