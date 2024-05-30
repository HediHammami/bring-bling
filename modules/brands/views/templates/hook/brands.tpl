<div class="cont">
<div class="brands-section">
<h2 class="brands-title"> PREMIUM <br> BRANDS</h2>
<h4><a class="view-all-brands" href="#"> VIEW ALL brands </a></h4>
</div>
<div class="image-container">
    {foreach from=$images item=image}
        <div class="image-item">
            <img src="{$image.url}" alt="{$image.alt}" />
            <div class="image-overlay">
                <div class="image-text">{$image.text}</div>
            </div>
        </div>
    {/foreach}
</div>
</div>