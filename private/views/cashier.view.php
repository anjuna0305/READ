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
                <!-- err -->
                <div class="error-holder">
                    <i class="fa-solid fa-triangle-exclamation exclanation_icon"></i>
                    <div class="err_message inline">error message</div>
                </div>
                <!-- end : err -->


                <!-- add order form -->
                <form method="post" action="<?= ROOT ?>/cashiers/addorder" id="addorder_form">
                    <!-- Bill no -->
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="input-login " type="number" name="bill_no" id="bill_no" placeholder="Bill Number">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>

                        <!-- deliver_date -->
                        <div class="col-lg-6">
                            <input class="input-login " type="date" name="deliver_date" id="deliver_date" placeholder="Deliver date">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>
                    </div>

                    <!-- name -->
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="input-login" type="text" name="name" id="name" placeholder="Name">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>
                    </div>

                    <!-- Items -->
                    <div class="itemdiv">
                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item1" id="item1">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item1_count" value=0 id="item1_count" placeholder="count">
                        </div>

                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item2" id="item2">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item2_count" value=0 id="item2_count" placeholder="count">
                        </div>

                        <div class="row">
                            <select class="input-login-it col-lg-8" name="item3" id="item3">
                                <option value="ballo">ballo</option>
                                <option value="harak">harak</option>
                                <option value="kaputo">kaputo</option>
                            </select>
                            <input class="input-login-it col-lg-4" type="number" name="item3_count" value=0 id="item3_count" placeholder="count">
                        </div>
                    </div>

                    <!-- price -->
                    <div class="row">
                        <div class=" col-lg-6">
                            <input class="input-login" type="number" name="price" id="price" placeholder="Total">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>

                        <!-- advanced -->
                        <div class="col-lg-6">
                            <input class="input-login col-lg-6" type="number" name="advanced" id="advanced" placeholder="Advance">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact NO  -->
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="input-login" type="text" name="contact_no" id="contact_no" placeholder="Contact Number">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>

                        <!-- book -->
                        <div class="col-lg-3">
                            <input class="input-login" type="number" name="book" id="book" placeholder="Book">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>

                        <!-- page -->
                        <div class="col-lg-3">
                            <input class="input-login" type="number" name="page" id="page" placeholder="Page">
                            <div class="error-holder">
                                <div class="err_message inline">error message</div>
                            </div>
                        </div>
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
                <h2 class="todo-heading col-lg-4">Orders</h2>
                <form class="search row" action="<?= ROOT ?>/cashiers/searchorder" method="post">
                    <input class="input-search todo-date col-lg-9" type="date" name="" id="">
                    <button class="btn btn-sm btn-red col-lg-3" value="search" type="submit">Search</button>
                </form>

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

    <script>
        const addorder_form = document.getElementById('addorder_form');
        console.log(addorder_form);

        const bill_no = document.getElementById('bill_no')
        const deliver_date = document.getElementById('deliver_date')
        const item1 = document.getElementById('item1')
        const item2 = document.getElementById('item2')
        const item3 = document.getElementById('item3')
        const item1_count = document.getElementById('item1_count')
        const item2_count = document.getElementById('item2_count')
        const item3_count = document.getElementById('item3_count')
        const price = document.getElementById('price')
        const name = document.getElementById('name')
        const advanced = document.getElementById('advanced')
        const contact_no = document.getElementById('contact_no')
        const book = document.getElementById('book')
        const page = document.getElementById('page')

        addorder_form.addEventListener('submit', (event) => {
            checkInputs(event);
        });

        function checkInputs(event) {
            const bill_no_value = bill_no.value.trim();
            const deliver_date_value = deliver_date.value.trim();
            const item1_value = item1.value.trim();
            const item2_value = item2.value.trim();
            const item3_value = item3.value.trim();
            const item1_count_value = item1_count.value.trim();
            const item2_count_value = item2_count.value.trim();
            const item3_count_value = item3_count.value.trim();
            const price_value = price.value.trim();
            const name_value = name.value.trim();
            const advanced_value = advanced.value.trim();
            const contact_no_value = contact_no.value.trim();
            const book_value = book.value.trim();
            const page_value = page.value.trim();

            if (bill_no_value == '') {
                displayErrorMessage(event, bill_no, "enter bill number");
            } else {
                offErrorMessage(bill_no);
            }

            if (deliver_date_value == '') {
                displayErrorMessage(event, deliver_date, "select date");
            } else {
                offErrorMessage(deliver_date);
            }

            if (item1_value == '' && item2_value == '' && item3_value == '') {
                displayErrorMessage(event, item1, "select item");
            } else {
                offErrorMessage(item1);
            }

            if (item1_value != '')

                if (price_value == '') {
                    displayErrorMessage(event, price, "enter price");
                } else {
                    offErrorMessage(price);
                }
        }
    </script>
</body>

</html>