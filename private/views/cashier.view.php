<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($_SESSION['USER']->username); ?></title>
    <link rel="stylesheet" href="<?= ROOT ?>/styles/styles.css">
    <link rel="stylesheet" href="<?= ROOT ?>/styles/cashier.css">
    <link rel="stylesheet" href="<?= ROOT ?>/styles/navbar.css">

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<header>
    <nav class="navbar">
        <div class="left">
            <div class="nav-i-logo">
                <img src="<?= ROOT ?>/Sources/index.png" alt="" class="nav-logo">
            </div>
        </div>
        <div class="right">
            <a href="<?= ROOT ?>/logout">
                <div class="nav-i">
                    Log out
                </div>
            </a>
        </div>

    </nav>
</header>

<body>
    <div class="container row">
        <div class="col-lg-6">
            <div class="login-container">
                <h1>New Order</h1>
                <form method="post" action="<?= ROOT ?>/cashiers/addorder">
                    <div class="row">
                        <input class="input-login col-lg-6" type="number" name="bill_no" id="" placeholder="Bill Number">
                        <input class="input-login col-lg-6" type="date" name="deliver_date" id="" placeholder="Deliver date">
                    </div>

                    <div class="row">
                        <input class="input-login col-lg-12" type="text" name="" id="" placeholder="Name">
                    </div>

                    <div class="itemdiv">
                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item1" id="">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item1_count" value=0 id="" placeholder="count">
                        </div>

                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item2" id="">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item2_count" value=0 id="" placeholder="count">
                        </div>

                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item3" id="">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item3_count" value=0 id="" placeholder="count">
                        </div>

                    </div>
                    <div class="row">
                        <input class="input-login col-lg-6" type="number" name="price" id="" placeholder="Total">
                        <input class="input-login col-lg-6" type="number" name="advanced" id="" placeholder="Advance">
                    </div>

                    <div class="row">
                        <input class="input-login col-lg-6" type="text" name="contact_no" id="" placeholder="Contact Number">
                        <input class="input-login col-lg-3" type="number" name="book" id="" placeholder="Book">
                        <input class="input-login col-lg-3" type="number" name="page" id="" placeholder="Page">
                    </div>

                    <button class="btn btn-sm btn-red btn-block login-btn" type="submit" value="Create">Place Order</button>
                </form>
            </div>

            <div class="login-container">
                <h2 class="todo-heading">Special Orders</h2>

                <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">magic mug x 12</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">23/265</div>

                    <div class="card-t col-lg-3">Deliver Date</div>
                    <div class="card-d col-lg-3">10/11/2023</div>
                </div>

                <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">Crystal board</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">23/265</div>

                    <div class="card-t col-lg-3">Deliver Date</div>
                    <div class="card-d col-lg-3">10/11/2023</div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="login-container">
                <h2 class="todo-heading">Search</h2>

                <!-- search form -->
                <form class="search" action="<?= ROOT ?>/cashiers/searchorder" method="post">
                    <input class="input-search" type="text" name="search_term" id="" placeholder="Bill No.">
                    <button class="btn btn-sm btn-red" value="search" type="submit">Search</button>
                </form>

                <!-- search results -->
                <!-- <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">magic mug x 12</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">23/265</div>
                </div> -->

                <!-- search results -->
                <?php if (isset($orders) && isset($order_items)) : ?>
                    <?php if (is_array($orders) && is_array($order_items)) : ?>
                        <div class="row order-card">
                            <?php if (count($orders) > 0) : ?>
                                <div class="order-t col-lg-3"><?= $orders[0]->bill_no ?></div>
                                <div class="order-t col-lg-1">-</div>
                                <div class="order-t col-lg-8"><?= ucfirst($order_items[0]->item_code) ?> X <?= $order_items[0]->count ?></div>


                                <?php for ($x = 1; $x < count($order_items); $x++) : ?>
                                    <div class="order-t col-lg-3"></div>
                                    <div class="order-t col-lg-1">-</div>
                                    <div class="order-t col-lg-8"><?= ucfirst($order_items[$x]->item_code) ?> X <?= $order_items[$x]->count ?></div>
                                <?php endfor; ?>

                                <div class="card-t col-lg-3">Contact No.</div>
                                <div class="card-d col-lg-3">0768150618</div>

                                <div class="blank col-lg-1"></div>

                                <div class="card-t col-lg-3">Book/Page</div>
                                <div class="card-d col-lg-2">23/265</div>
                            <?php else : ?>
                                <h4 class="col-lg-12">No result</h4>
                            <?php endif; ?>
                        </div>
                        <a href="<?= ROOT ?>/cashiers">
                            <button class="btn btn-sm btn-gray" value="">Clear Results</button>
                        </a>
                    <?php else : ?>
                        <div class="row order-card">
                            <h4 class="col-lg-12">No result</h4>
                        </div>
                        <a href="<?= ROOT ?>/cashiers">
                            <button class="btn btn-sm btn-gray" value="">Clear Results</button>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>


            </div>

            <!-- to do list -->
            <div class="login-container">
                <h2 class="todo-heading">Today orders</h2>

                <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">magic mug x 12</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">23/265</div>
                </div>

                <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">magic mug x 12</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">02/65</div>
                </div>

                <div class="row order-card">
                    <div class="order-t col-lg-3">20000450</div>
                    <div class="order-t col-lg-1">-</div>
                    <div class="order-t col-lg-8">magic mug x 12</div>

                    <div class="blank col-lg-4"></div>
                    <div class="order-t col-lg-8">white mug x 12</div>

                    <div class="card-t col-lg-3">Contact No.</div>
                    <div class="card-d col-lg-3">0768150618</div>

                    <div class="blank col-lg-1"></div>

                    <div class="card-t col-lg-3">Book/Page</div>
                    <div class="card-d col-lg-2">86/365</div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>