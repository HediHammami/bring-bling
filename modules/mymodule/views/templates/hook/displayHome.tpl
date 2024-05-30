{if $categories}
    <div class="owl-carousel category-carousel">
        {foreach $categories as $category}
            <div class="item">
                {assign var='categoryLink' value=$category.link_rewrite|escape:'htmlall':'UTF-8'}
                <div class="category-wrapper">
                    <a href="{$link->getCategoryLink($category.id_category, $categoryLink)}">
                        <div class="category-image">
                            <img src="{$link->getCatImageLink($category.name, $category.id_category, null)}" alt="{$category.name}">
                            <div class="category-name">
                                <h2>shop {$category.name}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        {/foreach}
    </div>
{else}
    <p>No categories found.</p>
{/if}
