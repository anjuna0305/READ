<!-- include header -->
<?php $this->view('includes/header') ?>
<?php $this->view('includes/navbar') ?>


<div class="event_item_completed">
    <div class="event_image">
        <img src="../public/assets/foodDonationEvent.jpg" alt="">
    </div>

    <h4 class="row">Completed</h4>
    <div class="event_button_holder_completed">
        <button class="greenButton event_button">View Details</button>
    </div>
</div>
<div>
    <h2><?=Auth::user()?></h2>
    <h2><?=Auth::logged_in()?></h2>
    
</div>

<?php
echo "<pre>";

?>

<!-- include footer -->
<?php $this->view('includes/footer') ?>