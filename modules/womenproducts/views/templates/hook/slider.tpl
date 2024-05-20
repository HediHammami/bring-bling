

{if $products} 
<div> 
<div class="w-section">
<h2 class="section-title"> New in <br> for women </h2>
<h4><a class="view-all" href="#"> view all </a></h4>
</div>
    <div class="owl-carousel owl-theme">
        {foreach $products as $product}
            <div class="item">
                <a class="holder" href="{$product.link}" title="{$product.name}">
                    <div class="image-container">
                    <img src="{$product.image_url}" alt="{$product.name}">
                    </div>
                    <p class="brand">{$product.manufacturer_name|escape:'htmlall':'UTF-8'}</p>
                    <h4 class="prod-title">{$product.name}</h4>
                    <p class="prod-price">{$product.price}</p>
                </a>
            </div>
        {/foreach}
    </div>
    </div>
{else}
    <p>No products found.</p>
{/if}