<!-- resources/views/db.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .navbar-brand img {
        width: 50px;
        height: auto;
        background: white;
        }

    </style>

</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/bangles.png') }}"></i>&nbsp;&nbsp;Wedding Collection</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Displaying Products Start -->
    <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
    @for ($i = 1; $i <= 10; $i++)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                    <img src="{{ asset('images/glass.jpg') }}" class="card-img-top" height="250">
                    <div class="card-body p-1">
                        <h4 class="card-title text-center text-info">Product {{ $i }}</h4>
                        <h5 class="card-text text-center text-danger">
                            <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;{{ number_format(10 * $i, 2) }}/-
                        </h5>
                    </div>
                    <div class="card-footer p-1">
                        <form action="" class="form-submit">
                            <div class="row p-2">
                                <div class="col-md-6 py-1 pl-4">
                                    <b>Quantity:</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control pqty" value="1">
                                </div>
                            </div>
                            <input type="hidden" class="pid" value="{{ $i }}">
                            <input type="hidden" class="pname" value="Product {{ $i }}">
                            <input type="hidden" class="pprice" value="{{ 10 * $i }}">
                            <input type="hidden" class="pimage" value="{{ asset('images/glass.jpg') }}">
                            <input type="hidden" class="pcode" value="PRD{{ $i }}">
                            <button class="btn btn-info btn-block addItemBtn">
                                <i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
<script>
    $(document).ready(function(){
        // Initialize a variable to keep track of the cart count
        var cartItemCount = 0;

        // Listen for clicks on elements with the class 'addItemBtn'
        $('.addItemBtn').on('click', function() {
            // Increment the cart item count
            cartItemCount++;
            // Update the text of the element with id 'cart-item' to show the new count
            $('#cart-item').text(cartItemCount);
        });
    });
</script>


    <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>
</html>
