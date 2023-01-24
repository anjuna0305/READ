<!-- include header -->
<?php $this->view('includes/header') ?>
<?php $this->view('includes/navbar') ?>

<?php
print_r($this->errors);
?>

<div class="mainSection">
    <form method="POST">
        <input value="<?= get_var('id') ?>" type="number" name="id" placeholder="User Index">

        <input value="<?= get_var('firstname') ?>" type="text" name="firstname" id="" placeholder="First name">
        <input value="<?= get_var('lastname') ?>" type="text" name="lastname" id="" placeholder="Last name">

        <select name="gender" id="">
            <option <?= get_select('gender', 'nothing') ?> value="nothing">Select Gender</option>
            <option <?= get_select('gender', 'male') ?> value="male">Male</option>
            <option <?= get_select('gender', 'female') ?> value="female">Female</option>
        </select>

        <input value="<?= get_var('email') ?>" type="email" name="email" id="">

        <input value="<?= get_var('password') ?>" type="password" name="password" id="" placeholder="password">
        <input value="<?= get_var('password2') ?>" type="password" name="password2" id="" placeholder="re-enter password">

        <button type="submit">submit details</button>
    </form>
</div>

<!-- include footer -->
<?php $this->view('includes/footer') ?>