<!-- include header -->
<?php $this->view('includes/header')?>
<?php $this->view('includes/navbar')?>

    <!-- <section id="coordinatorsSec">
        <h3 class="purpleText">Area coordinators</h3>
        <div class="areaCoordinatorSec">
            <div class="row">
                <div class="areaCoos">
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Address</p>
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Town</p>

                    <div id="areaCoosButtonArea">
                        <button class="linkButtonPurple" id="deleteList">Delete List</button>
                        <button class="greenButton" id="viewList">View List</button>
                    </div>
                </div>

                <div class="areaCoos">
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Address</p>
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Town</p>

                    <div id="areaCoosButtonArea">
                        <button class="linkButtonPurple" id="deleteList">Delete List</button>
                        <button class="greenButton" id="viewList">View List</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="areaCoos">
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Address</p>
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Town</p>

                    <div id="areaCoosButtonArea">
                        <button class="linkButtonPurple" id="deleteList">Delete List</button>
                        <button class="greenButton" id="viewList">View List</button>
                    </div>
                </div>

                <div class="areaCoos">
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Address</p>
                    <p class="purpleText" id="areaCoosItems">Name</p>
                    <p class="purpleText" id="areaCoosItems">Town</p>

                    <div id="areaCoosButtonArea">
                        <button class="linkButtonPurple" id="deleteList">Delete List</button>
                        <button class="greenButton" id="viewList">View List</button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="addCoordinatorSec">
        <div class="row">
            <h3 class="purpleText">Add Area coordinators</h3>
        </div>
        <div class="formHolder" id="addCoordinators">
            <form method="post">
                <div class="row">
                    <input type="text" name="fName" id="fName" placeholder="First Name" class="inputFieldHalfs">
                    <input type="text" name="lName" id="lName" placeholder="Last Name" class="inputFieldHalfs">
                </div>

                <div class="row">
                    <input type="number" name="userIndex" id="index" placeholder="Index" class="inputField">
                </div>

                <div class="row">
                    <input type="email" name="email" id="email" placeholder="E-mail" class="inputField">
                </div>

                <div class="row">
                    <input type="text" name="nic" id="nic" placeholder="NIC" class="inputField">
                </div>

                <div class="row">
                    <input type="number" name="conNumber" id="conNumber" placeholder="Contact Number" class="inputField">
                </div>

                <div class="row">

                    <input type="text" name="district" id="district" placeholder="District" class="inputFieldHalfs">

                    <input type="text" name="town" id="town" placeholder="Town" class="inputFieldHalfs">
                </div>

                <div class="row">
                    <input type="password" name="password" id="password" placeholder="Password" class="inputField">
                </div>

                <div class="row">
                    <input type="password" name="reEnteredPassword" id="re-enteredPassword" placeholder="Re-entere Password" class="inputField">
                </div>

                <div class="row" id="addButtonDiv">
                    <button class="greenButton" id="addButton">Add</button>
                </div>

            </form>
        </div>

    </section>

    <!-- <section class="searchAreaCoos">
        <div>
            <div class="row heading">
                <h3 class="purpleText">Search Area Coordinators</h3>
            </div>
            <div class="row">

                <form class="search_form" method="GET">

                    <input type="text" required name="search_content" id="" class="inputField searchField">

                    <button type="submit" class="purpleButton search_button_purple"><img src="Photos/search01-white.png" alt=""></button>
                </form>
            </div>
            <div class="result_section">
                <div class="resultMessager">
                    <?php
                    if (isset($_GET['search_content'])) {
                    ?>
                        <h4>Search results</h4>
                    <?php
                    } else {
                    ?>
                        <h4>Recent Registrations</h4>
                    <?php
                    }
                    ?>
                </div>

                <div class="result_table">
                    <table class="result_table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</hd>
                                <th>Registration Number</th>
                                <th>Email</th>
                                <th>NIC</th>
                                <th>Contact Number</th>
                                <th>District</th>
                                <th>Town</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET['search_content'])) {
                                $search_term = $_GET['search_content'];
                                $query = "SELECT * FROM areacoordinators WHERE CONCAT(firstName,lastName,userIndex,email,nic,contact,district,town) LIKE '%$search_term%'";

                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $member) {
                            ?>
                                        <tr>
                                            <td><?= $member['firstName'] ?></td>
                                            <td><?= $member['lastName'] ?></td>
                                            <td><?= $member['userIndex'] ?></td>
                                            <td><?= $member['email'] ?></td>
                                            <td><?= $member['nic'] ?></td>
                                            <td><?= $member['contact'] ?></td>
                                            <td><?= $member['district'] ?></td>
                                            <td><?= $member['town'] ?></td>
                                            <td><?= $member['password'] ?></td>
                                            <td>
                                                <div>
                                                    <button class="editButton table_button"><img src="Photos/edit_button.png" alt="edit"></button>
                                                    <button class="deleteButton table_button"><img src="Photos/delete_button.png" alt="delete_button"></button>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                }
                            } else {
                                $query = "SELECT * FROM areacoordinators";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row['firstName'] ?></td>
                                            <td><?= $row['lastName'] ?></td>
                                            <td><?= $row['userIndex'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['nic'] ?></td>
                                            <td><?= $row['contact'] ?></td>
                                            <td><?= $row['district'] ?></td>
                                            <td><?= $row['town'] ?></td>
                                            <td><?= $row['password'] ?></td>
                                            <td>
                                                <div>
                                                    <button class="editButton table_button"><img src="Photos/edit_button.png" alt="edit"></button>
                                                    <button class="deleteButton table_button"><img src="Photos/delete_button.png" alt="delete_button"></button>
                                                </div>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section> -->




    <section class=" footer">
        <h5>Copyright © 2021 FoodForAll</h5>
    </section>

<!-- include footer -->
<?php $this->view('includes/footer')?>
