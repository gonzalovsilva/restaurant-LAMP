<?php include 'header.php'; ?>
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
            <div class="col-12 col-md-6 mb-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstNameInput" placeholder="First Name">
                    <label for="firstNameInput">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastNameInput" placeholder="Last Name">
                    <label for="lastNameInput">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                    <label for="emailInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="selectLocation" aria-label="Floating label select example">
                        <option selected value="1">San Francisco</option>
                        <option value="2">Pacific Fair Shopping Centre</option>
                        <option value="3">Arlington</option>
                    </select>
                    <label for="selectLocation">Choose a location</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="selectSubject" aria-label="Floating label select example">
                        <option selected value="1">Reservation</option>
                        <option value="2">Information</option>
                        <option value="3">Feedback</option>
                        <option value="4">Other</option>
                    </select>
                    <label for="selectSubject">Choose a subject</label>
                </div>
                <div class="mt-3 form-floating">
                    <textarea class="form-control" placeholder="Write your message here" id="textarea"
                        style="height: 100px"></textarea>
                    <label for="textarea">Message</label>
                </div>
                <div class="mt-3 ">
                    <button class="col-12 btn bg-p-color b-s-light border-4 shadow py-3 c-s-light b_hover" type="submit">Submit form <i class="far fa-sticky-note"></i></button>
                </div>
            </div>
        </div>

    </main>
    <!-- end main title -->
    <!-- begin footer -->
    <div class="spacer"></div>
    <footer class="footer fixed-bottom py-3 bg-black">
        <div class="container">
            <span class="text-muted">Website made by Gonçalo Silva | Belgium - 2021</span>
        </div>
    </footer>
    <!-- end footer -->
    <!--begin Bootstrap 5 script -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- end Bootstrap 5 script -->
</body>

</html>