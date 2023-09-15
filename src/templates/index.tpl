{* Smarty *}
{include file="partials/header.tpl"}


<!-- Page Header -->
<div class="container mt-4">
    <h1 class="display-6">{$pageHeader}</h1>
    <p class="lead">{$pageSubheader}</p>
</div>

<!-- Content Area -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            {include file=$pageContent} <!-- Include dynamic content -->
        </div>
        <div class="col-md-4">
            {include file=$pageSidebar}
        </div>
    </div>
</div>

{include file="partials/footer.tpl"}