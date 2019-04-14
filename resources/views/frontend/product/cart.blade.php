<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Cesta-Feira: Cart Page</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

    <style type="text/css">

        /*!
         * Start Bootstrap - Heroic Features (https://startbootstrap.com/template-overviews/heroic-features)
         * Copyright 2013-2017 Start Bootstrap
         * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-heroic-features/blob/master/LICENSE)
         */

        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

        .cart-item-count {
            position: relative;
        }

        .cesta-feira__num-items {
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #fff;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            top: -2px;
            right: -12px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody id="cart-items">
                </tbody>
                <tfoot>
                <tr>
                    <td><a href="javascript:;" class="btn btn-danger" data-cesta-feira-clear-basket>Clear Cart</a></td>
                    <td>  </td>
                    <td>Total</td>
                    <td class="text-right" id="total-value"><strong>$0</strong></td>
                    <td>  </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- /.container -->
</body>
</html>
