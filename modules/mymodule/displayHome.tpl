<link rel="stylesheet" href="{$module_dir}css/mymodule.css" type="text/css" />

{if $categories}
    <ul class="category-list">
        {foreach $categories as $category}
            <li>
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
            </li>
        {/foreach}
    </ul>
{else}
    <p>No categories found.</p>
{/if}


