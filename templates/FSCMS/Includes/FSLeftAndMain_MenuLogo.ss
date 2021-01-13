<div class="cms-sitename">
    <div class="cms-sitename__link font-icon-silverstripe font-icon-large" 
        title="FSTUDIO CMS">

        <!-- Add CMS image -->
        <div class="fs-cms-logo">
            <div class="fs-cms-logo-box"
                style="background-image: url('{$logoImage}');"
            ></div>
        </div>

    </div>

    <a class="cms-sitename__title" href="$BaseHref" target="_blank">
        <% if $SiteConfig %>
            $SiteConfig.Title
        <% else %>
            $ApplicationName
        <% end_if %>
    </a>
</div>

