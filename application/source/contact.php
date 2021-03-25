<?php
session_start();
define('getaccess', TRUE);

include 'header.php';

if (!isset($_SESSION['isValid'])) {
    $_SESSION['isValid'] = [1, 1, 1, 1, false];
}   
?>
<!-- begin main title -->
<main class="container spacer-main">
    <div class="row py-4">
        <div class="col-12 divider-top pb-4">
            <h1 class="text-center c-s-light">Contact Us</h1>
        </div>
    </div>
    <div class="row">
        <div id="contact-ph" class="col-md-6 ph-max-h-550 overflow-hidden">
            <img class="img-fluid" src="images/contact.jpg" alt="white notepad photo">
        </div>
        <form class="col-12 col-md-6 mb-3" action="form_contact_post.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstNameInput" placeholder="First Name" name="first_name" required>
                <label for="firstNameInput">First Name</label>
                <?php if ($_SESSION['isValid'][0] == 0) '<div class="invalid-feedback">Invalid</div>'; ?>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lastNameInput" placeholder="Last Name" name="last_name" required>
                <label for="lastNameInput">Last Name</label>
                <?php if ($_SESSION['isValid'][1] == 0) '<div class="invalid-feedback">Invalid</div>'; ?>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="mail" required>
                <label for="emailInput">Email address</label>
                <?php if ($_SESSION['isValid'][2] == 0) '<div class="invalid-feedback">Invalid</div>'; ?>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="selectLocation" aria-label="Floating label select example" name="rest_loc" required>
                    <option selected value="1">San Francisco</option>
                    <option value="2">Pacific Fair Shopping Centre</option>
                    <option value="3">Arlington</option>
                </select>
                <label for="selectLocation">Choose a location</label>
            </div>
            <div class="form-floating">
                <select class="form-select" id="selectSubject" aria-label="Floating label select example" name="msg_subject" required>
                    <option selected value="1">Reservation</option>
                    <option value="2">Information</option>
                    <option value="3">Feedback</option>
                    <option value="4">Other</option>
                </select>
                <label for="selectSubject">Choose a subject</label>
            </div>
            <div class="mt-3 form-floating">
                <textarea class="form-control" placeholder="Write your message here" id="textarea" name="msg" style="height: 100px" required></textarea>
                <label for="textarea">Message</label>
                <?php if ($_SESSION['isValid'][3] == 0) '<div class="invalid-feedback">Invalid</div>'; ?>
            </div>
            <div class="mt-3 ">
                <button id="submit" class="col-12 btn bg-p-color b-s-light border-4 shadow py-3 c-s-light b_hover" type="submit">Submit form <i class="far fa-sticky-note"></i></button>
            </div>
        </form>
        <script>
            function updateForm(isValid) {
                if (isValid) {

                    let btnSubmit = document.getElementById('submit');
                    let btnInner = btnSubmit.innerHTML;
                    btnSubmit.classList.add('bg-success');
                    btnSubmit.classList.remove('b-s-light');
                    btnSubmit.innerHTML = 'Message Sended';
                    console.log('added color!');
                    setTimeout(() => {
                        btnSubmit.innerHTML = btnInner;
                        btnSubmit.classList.add('b-s-light');
                        btnSubmit.classList.remove('bg-success');
                        console.log('donne!');
                    }, 5000);
                   
                }
            }
        </script>
        <?php
        if ($_SESSION['isValid'][4] == true) { //if data was added to database
            echo "<script>updateForm(true);</script>";
            $_SESSION['isValid'][4] = false;
        }
        ?>
    </div>
</main>


<?php include 'footer.php'; ?>