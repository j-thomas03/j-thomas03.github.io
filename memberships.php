<html>

<head>
    <title>Diamonds Gym Bedworth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
<?php include "nav.html";?>

<div id="memberships-main">


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Memberships</h1>
    <p class="lead">We offer a range of flexible membership options for you to choose from</p>
    <p class="text-muted">Payments made at the gym are CASH ONLY</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Day Pass</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£7</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Allows access to the gym for the length of the day</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" id="day-buy-button">Buy Here</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Week Pass</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£20</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Allows access to the gym for a period of 7 days</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" id="week-buy-button">Buy Here</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Month Pass</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£40</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Allows gym access for 1 month from the day of purchase</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" id="month-buy-button">Buy Here</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Monthly Direct Debit</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£34/mo</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Direct Debit payment for monthly rollover memberships</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" id="dd-buy-button">Buy Here</button>
            </div>
        </div>
    </div>

</div>
</div>
<?php include 'footer.html'?>


<script>
    var day_buy_button = document.getElementById("day-buy-button");
    var week_buy_button = document.getElementById("week-buy-button");
    var month_buy_button = document.getElementById("month-buy-button");
    var dd_buy_button = document.getElementById("dd-buy-button");
    var all_buttons = [];
    all_buttons = [day_buy_button, week_buy_button, month_buy_button, dd_buy_button];

    day_buy_button.addEventListener("click", openLink);
    week_buy_button.addEventListener("click", openLink);
    month_buy_button.addEventListener("click", openLink);
    dd_buy_button.addEventListener("click", openLink);


    function openLink() {
        console.log("herer");
        window.open('https://secure.ashbournemanagement.co.uk/signupUK/index.aspx?fn=GRCH9', '_blank');
    }
</script>

</body>

</html>