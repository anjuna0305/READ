<!-- include header -->
<?php $this->view('includes/header')?>
<?php $this->view('includes/navbar')?>

    <div>
        <div class="row heading">
            <h2 class="purpleText">Events</h2>
        </div>

        <div class="row">
            <form class="search_form" method="GET">

                <input type="text" required name="search_content" id="" class="inputField searchField">

                <button type="submit" class="purpleButton search_button_purple"><img src="Photos/search01-white.png" alt=""></button>
            </form>
        </div>
    </div>

    <div>
        <div class="event_heading">Ongoing events</div>
        <div class="ongoing_events_sec">
            <div class="row">

                <div class="event_item">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <div class="progress_bar donators">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Donations</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" width="25px" alt="">
                                <span>25000LKR</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>

                    <div class="progress_bar voluntees">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Volunteers</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" alt="">
                                <span>25</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>
                    <div class="event_button_holder">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

                <div class="event_item">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <div class="progress_bar donators">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Donations</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" width="25px" alt="">
                                <span>25000LKR</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>

                    <div class="progress_bar voluntees">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Volunteers</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" alt="">
                                <span>25</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>
                    <div class="event_button_holder">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

                <div class="event_item">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <div class="progress_bar donators">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Donations</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" width="25px" alt="">
                                <span>25000LKR</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>

                    <div class="progress_bar voluntees">
                        <div class="progress_bar_titles">
                            <div class="purpleText">Volunteers</div>
                            <div class="purpleText">
                                <img src="Photos/ArrowLog.png" alt="">
                                <span>25</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pogress_div">
                                <div class="progreess_fill"></div>
                            </div>
                            <div class="purpleText fill_percentage_text">80%</div>
                        </div>
                    </div>
                    <div class="event_button_holder">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <div class="event_heading">Ongoing events</div>
        <div class="completed_events_sec">
            <div class="row">

                <div class="event_item_completed">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <h4 class="row">Completed</h4>
                    <div class="event_button_holder_completed">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

                <div class="event_item_completed">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <h4 class="row">Completed</h4>
                    <div class="event_button_holder_completed">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

                <div class="event_item_completed">
                    <div class="event_image">
                        <img src="Photos/foodDonationEvent.jpg" alt="">
                    </div>

                    <h4 class="row">Completed</h4>
                    <div class="event_button_holder_completed">
                        <button class="greenButton event_button">View Details</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class=" footer">
        <h5>Copyright © 2021 FoodForAll</h5>
    </section>


<!-- include footer -->
<?php $this->view('includes/footer')?>