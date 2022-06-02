<div id="featuredProduct" class="row">
    <div class="col-sm-8">
        <img alt="Featured Product" src="~/Images/Products/@Model.FeaturedProduct.ImageName" class="img-fluid rounded" />
    </div>
    <div id="featuredProductInfo" class="col-sm-4">
        <div id="productInfo">
            <h2>@Model.FeaturedProduct.Name</h2>
            <p class="price">$@string.Format("{0:f}", Model.FeaturedProduct.Price)</p>
            <p class="description">@Model.FeaturedProduct.Description</p>
        </div>
        <div id="callToAction">
            <a class="btn btn-danger order-button" asp-page="/order" asp-route-id="@Model.FeaturedProduct.Id" title="Order @Model.FeaturedProduct.Name">Order Now</a>
        </div>
    </div>
</div>