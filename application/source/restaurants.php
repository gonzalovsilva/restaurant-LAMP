<?php define('getaccess', TRUE); ?>

<?php include 'header.php'; ?>
<!-- begin main title -->
<main class="container spacer-main">
    <div class="row py-4">
        <div class="col-12 divider-top pb-4">
            <h1 class="text-center c-s-light">About Us</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <div class="shadow rounded bg-p-light overflow-hidden b-s-light">
                <h2 class="p-3 c-s-light text-center bg-p3">Our Mission</h2>
                <p class="p-3">Think about delicacies and flavors. Quiet Break invites to share a refined culinary
                    experience lavishing passion and authenticity.
                </p>
                <p class="p-3">Our chefs composes ephemeral monthly cards giving voice to fresh, local and seasonal products
                    and drawing inspiration from a tasty multicultural culinary heritage to delight and dazzle the
                    palate.<br><br>
                    Since COVID-19 hit the industry this year, it’s become even more obvious how central food delivery is to restaurant operations. It’s become essential to optimize for delivery.
                </p>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-3">

            <div class="shadow rounded p-1 bg-p-light overflow-hidden b-s-light">
                <div class="dropdown">
                    <button class="btn bg-p-color b-s-light border-4 shadow py-3 c-s-light dropdown-toggle col-12 b_hover" type="button" id="dropdownLocation" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose a different location
                    </button>
                    <ul class="dropdown-menu col-12" aria-labelledby="dropdownLocation">
                        <li><button id="loc1" class="dropdown-item" type="button">San Francisco</button></li>
                        <li><button id="loc2" class="dropdown-item" type="button">Pacific Fair Shopping
                                Centre</button></li>
                        <li><button id="loc3" class="dropdown-item" type="button">Arlington</button></li>
                    </ul>
                </div>
                <!-- Location 1 -->
                <div id="loc1_ho" class="resto_schedules p-3">
                    <div class="row px-2">
                        <div class="col-3">
                            <h6>Address</h6>
                        </div>
                        <div class="col-9 text-start">
                            <p class="mb-0">1601 Taraval St, San Francisco, CA 94116, États-Unis</p>
                        </div>
                    </div>
                    <h6 class="p-2">Opening hours</h6>
                    <!-- Monday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Monday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">Closed</p>
                        </div>
                    </div>
                    <!-- Tuesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Tuesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Wednesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Wednesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Thursday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Thursday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Friday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Friday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Saturday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Saturday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Sunday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Sunday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">12:30 - 15:00</p>
                        </div>
                    </div>
                </div>
                <!-- Location 2 -->
                <div id="loc2_ho" class="resto_schedules p-3">
                    <div class="row px-2">
                        <div class="col-3">
                            <h6>Address</h6>
                        </div>
                        <div class="col-9 text-start">
                            <p class="mb-0">Shop 2706B, Pacific Fair Shopping Centre,, Broadbeach QLD 4218,
                                Australie</p>
                        </div>
                    </div>
                    <h6 class="p-2">Opening hours</h6>
                    <!-- Monday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Monday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">Closed</p>
                        </div>
                    </div>
                    <!-- Tuesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Tuesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Wednesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Wednesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Thursday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Thursday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Friday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Friday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Saturday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Saturday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Sunday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Sunday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">12:30 - 15:00</p>
                        </div>
                    </div>
                </div>
                <!-- Location 3 -->
                <div id="loc3_ho" class="resto_schedules p-3">
                    <div class="row px-2">
                        <div class="col-3">
                            <h6>Address</h6>
                        </div>
                        <div class="col-9 text-start">
                            <p class="mb-0">935 N Stafford St, Arlington, VA 22203, États-Unis</p>
                        </div>
                    </div>
                    <h6 class="p-2">Opening hours</h6>
                    <!-- Monday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Monday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">Closed</p>
                        </div>
                    </div>
                    <!-- Tuesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Tuesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Wednesday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Wednesday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Thursday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Thursday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Friday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Friday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Saturday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 col-lg-3 px-lg-0 text-lg-start">
                            <p class=" mb-0">Saturday</p>
                        </div>
                        <div class="col-6 col-lg-3 px-lg-0 text-end">
                            <p class=" mb-0">12:00 - 15:00</p>
                        </div>
                        <div class="col-6 offset-4 col-lg-3 offset-lg-0 px-lg-0 text-end">
                            <p class=" mb-0">18:00 - 23:00</p>
                        </div>
                    </div>
                    <!-- Sunday -->
                    <div class="row shadow-sm justify-content-center align-items-center mb-1 p-0 bg-s-color mx-2 rounded-3">
                        <div class="col-4 px-lg-4">
                            <p class=" mb-0">Sunday</p>
                        </div>
                        <div class="col-6 text-end px-lg-4">
                            <p class=" mb-0">12:30 - 15:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maps -->
        <div class="col-12 mb-3">
            <div class="shadow rounded bg-p-light overflow-hidden b-s-light">
                <h2 class="p-3 c-s-light text-center my-0 bg-p3">Come visit Us</h2>
                <iframe id="map_loc1" class="map-loc m-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12620.018063295198!2d-122.49857748162843!3d37.743038284964996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x359f828404326bf!2sEl%20Burrito%20Express!5e0!3m2!1sfr!2sbe!4v1612092505675!5m2!1sfr!2sbe" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>
                <iframe id="map_loc2" class="map-loc m-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.609411111551!2d153.42552761551877!3d-28.036411482656824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9104f01a4ecbd5%3A0x45c0e95f1007d69c!2sSQDAthletica%20-%20Pacific%20Fair!5e0!3m2!1sfr!2sbe!4v1612179302274!5m2!1sfr!2sbe" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>
                <iframe id="map_loc3" class="map-loc m-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12423.116147436742!2d-77.109487!3d38.883297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b425bba6d75b%3A0x609c92e4a45d3b1d!2sIHOP!5e0!3m2!1sfr!2sbe!4v1612274968730!5m2!1sfr!2sbe" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>