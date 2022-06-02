<form method="post">
    <div class="row">
        <div class="col-3">
            <img src="~/Images/Products/Thumbnails/@Model.Product.ImageName" class="img-fluid img-thumbnail" alt="Image of @Model.Product.Name"/>
        </div>
        <div class="col-9">
            <ul class="orderPageList" data-role="listview">
                <li>
                    <div>
                        <p class="description">@Model.Product.Description</p>
                    </div>                
                </li>
                <li class="email">
                    <div class="form-group">
                        <label asp-for="OrderEmail"></label>
                        <input asp-for="OrderEmail" class="form-control form-control-sm" />                
                        <span asp-validation-for="OrderEmail"></span>
                    </div>
                </li>
                <li class="shipping">
                    <div class="form-group">
                        <label asp-for="OrderShipping"></label>
                        <textarea rows="4" asp-for="OrderShipping" class="form-control form-control-sm"></textarea>               
                        <span asp-validation-for="OrderShipping"></span>
                    </div>
                </li>
                <li class="quantity">
                    <div class="form-group row">
                        <label asp-for="OrderQuantity" class="col-1 col-form-label"></label>
                        <input asp-for="OrderQuantity" class="form-control form-control-sm"/>
                        x
                        <span class="order-calc" id="orderPrice">@Model.Product.Price.ToString("f")</span>
                        =
                        <span class="order-calc" id="orderTotal">@Model.Product.Price.ToString("f")</span>
                        <span asp-validation-for="OrderQuantity"></span>
                    </div>
                </li>
            </ul>
            <p class="actions">
                <input type="hidden" asp-for="Product.Id" />
                <button class="btn btn-danger order-button">Place Order</button>
            </p>
        </div>
    </div>
</form>