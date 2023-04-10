<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - #codevember Credit Card Checkout</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="payment1/./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="container">
        <article class="part card-details">
            <h1>
                Credit Card Details
            </h1>
            <form action="" if="cc-form" autocomplete="off" method="POST">
                <input type="hidden" value="h" name="hide">
                <div class="group card-number">
                    <label for="first">Card Number</label>

                    <input type="text" id="first" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;" name="number">
                    <input type="text" id="second" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;" name="number">
                    <input type="text" id="third" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;" name="number">
                    <input type="text" id="fourth" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;" name="number">
                </div>
                <div class="group card-name">
                    <label for="name">Name On Card</label>
                    <input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname" name="name">
                </div>
                <div class="group card-expiry">
                    <div class="input-item expiry">
                        <label for="expiry">Expiry Date</label>
                        <input type="text" id="expiry" placeholder="02" name="expiry">
                        <!-- <input type="text" class="year" id="" placeholder="2017" name="expiry"> -->
                    </div>
                    <div class="input-item csv">
                        <label for="csv">CSV No.</label><a href="#what">?</a>
                        <input type="text" class="csv" name="csvnumber">
                    </div>
                </div>
                <div class="grup submit-group">
                    <span class="arrow"></span>
                    <input type="submit" class="submit" value="Continue to payment">
                </div>
            </form>
        </article>
        <div class="part bg"></div>
    </div>
</div>
<!-- partial -->{literal}
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="payment1/./script.js"></script>
{/literal}

</body>
</html>
