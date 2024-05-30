<div id="partner-logos-container">
  <h2> OUR PARTNERS </h2>
    <div id="partner-logos" class="owl-carousel owl-theme">
        {foreach from=$partners item=partner}
            <div class="logo-item">
                <img src="{$partner.logo}" alt="{$partner.name}" />
            </div>
        {/foreach}
    </div>
</div>
