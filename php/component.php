<?php


function component($ProductName, $ProductPrice, $ProductImage, $productId)
{
$element = "
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\" id='img'>
            <img src=\"$ProductImage\" alt=\"Image 1\" class=\"img-fluid card-img-top\">
        </div>
        <div class=\"card body\">
            <h5 class=\"card-title\">$ProductName</h5>
            <h6>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
            </h6>
            <p class=\"card-text\">
                WEWe
            </p>
            <h5>
              <small><s class=\"text-secondary\">$280</s></small>
              <span class=\"price\">$$ProductPrice</span>
            </h5>
            <button type='submit' class='btn btn-warning my-3' name='add'>Add To Cart<i class='fas fa-shopping-cart'></i></button>
            <input type='hidden' name='product_id' value='$productId'>
        </div>
    </form>
</div>
";
echo $element;
}
function cartElement($productImg, $productName, $productPrice, $productId){
    $element = "
<form action=\"cart.php?action=remove&id=$productId\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
        <div class=\"row bg-white\">
        <div class=\"col-mg-3 pl-0\">
            <img src=$productImg alt=\"Image1\" id=\"img\">
        </div>
        <div class=\"col-mg-6\" id=\"product\">
            <h5 class=\"pd-2\">$productName</h5>
            <small class=\"text-secondary\">Seller: Sina</small>
            <h5 class=\"pd-2\">$$productPrice</h5>
            <button type=\"submit\" class=\"btn btn-warning\">Save</button>
            <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
     </div>
<div class=\"col-mg-3 py-5\">
    <div id=\"button\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\">
            <i class=\"fas fa-minus\"></i>
        </button>
        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\">
            <i class=\"fas fa-plus\"></i>
        </button>
    </div>
</div>
                        </div>
                    </div>
                </form>

    ";
    echo $element;
}


























