

{if $products} 
<div class="menscarousel"> 
<div class="w-section">
<h2 class="section-title"> New in <br> for men </h2>
<h4><a class="view-all" href="#"> view all </a></h4>
</div>
    <div id="men-products-carousel" class="owl-carousel owl-theme">
        {foreach $products as $product}
            <div class="items">
                <a class="holder" href="{$product.link}" title="{$product.name}">
                    <div class="image-container"> 
                                
      {if $product.has_discount}
                            <div class="discount-badge">-{$product.discount_percentage}%</div>
                        {/if}
                    
                    <img src="{$product.image_url}" alt="{$product.name}">
                    <button class="view-product-button">View Product</button>
                    </div>
                    <p class="brand">{$product.manufacturer_name|escape:'htmlall':'UTF-8'}</p>
                    <h4 class="prod-title">{$product.name}</h4>
                     {if $product.has_discount}
                            <div class="product-price">
                            <span class="discounted-price">{$product.discountedPrice}</span>
                                <span class="original-price strikethrough">{$product.price}</span>
                            </div>
                        {else}
                            <div class="product-price">
                                <span class="prod-price">{$product.price}</span>
                            </div>
                        {/if}
                </a>
            </div>
        {/foreach}
    </div>
     <div class="mobile-cat-btn"> <button class="cat-btn">view all</button> </div>
    </div>
{else}
    <p>No products found.</p>
{/if}