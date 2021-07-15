<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<?= $this->include('./components/navbar') ?>

<div class="container mt-5">
    <?php if (isset($validation)) : ?>
        <span><?= $validation->listErrors('list') ?></span>
    <?php endif; ?>
    <div class="row">
        <div class="col-11 col-lg-4">
            <div class="user-card">
                <?php if (!session()->noReq) : ?>
                    <img class="mt-5" src="<?= base_url(session()->profile) ?>" alt="" srcset="">
                <?php else : ?>
                    <img class="mt-5" src="<?= base_url("uploads/default.png") ?>" alt="" srcset="">
                <?php endif; ?>

                <h6 class="mt-3"><?= session()->full_name; ?></h6>
                <h6>SY. 2020-2021 (2nd Sem)</h6>
                <h6 style="color:orange;">Status : <?= session()->status ?></h6>
            </div>

            <div class="sidebar-action" id="action1">
                <a href="#personal">Personal Information</a>
            </div>
            <div class="sidebar-action" id="action2">
                <a href="#education">Education Background</a>
            </div>

            <div class="sidebar-action" id="action3">
                <a href="#requirements">Requirements </a>
            </div>
        </div>

        <div class="col-11 col-lg-8">
            <div class="main-card">
                <section id="personal" class=" main-card_content">
                    <h3 class="main-card_title">Personal Information</h3>
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-12 col-lg-4">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="<?= session()->first_name ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="middleName">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" value="<?= session()->middle_name ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="<?= session()->last_name ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="birthDate">Birth Date</label>
                                <input type="date" class="form-control" id="birthDate" placeholder="Birth Date" value="<?= session()->birth_date ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="birthPlace">Birth Place</label>
                                <input type="text" class="form-control" id="birthPlace" placeholder="Birth Place" value="<?= session()->birth_place ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="sex">Sex</label>
                                <input type="text" class="form-control" id="sex" placeholder="Sex" value="<?= session()->sex ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="contactNumber">Contact Number</label>
                                <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" value="<?= session()->contact_number ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" id="province" placeholder="Province" value="<?= session()->province ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" placeholder="Municipality" value="<?= session()->municipality ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="barangay">Barangay</label>
                                <input type="text" class="form-control" id="barangay" placeholder="Barangay" value="<?= session()->barangay ?>" readonly>
                            </div>
                            <div class="col-12 col-lg-9">
                                <label for="completeAddress">Complete Address</label>
                                <input type="text" class="form-control" id="completeAddress" placeholder="Complete Address" value="<?= session()->full_address ?>" readonly>
                            </div>
                        </div>

                    </form>

                </section>

                <section id="education" class="main-card_content">
                    <h3 class="main-card_title">Education Background</h3>
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-lg-4">
                                <label for="elem">Elementary School</label>
                                <input type="text" class="form-control" id="elem" name="elem_school" value="<?= session()->elem_school ?>" placeholder="Elementary School" readonly>
                            </div>
                            <div class="col-12 col-lg-5">
                                <label for="elemAddress">Address</label>
                                <input type="text" class="form-control" id="elemAddress" name="elem_address" value="<?= session()->elem_address ?>" placeholder="Address" readonly>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="elemYear">Year Graduated</label>
                                <input type="text" class="form-control" id="elemYear" name="elem_year" value="<?= session()->elem_year ?>" placeholder="Year Graduated" readonly>
                            </div>

                            <div class="col-12 col-lg-4">
                                <label for="secondary">Secondary School</label>
                                <input type="text" class="form-control" id="secondary" name="second_school" value="<?= session()->second_school ?>" placeholder="Secondary School" readonly>
                            </div>
                            <div class="col-12 col-lg-5">
                                <label for="secondaryAddress">Address</label>
                                <input type="text" class="form-control" id="secondaryAddress" name="second_address" value="<?= session()->second_address ?>" placeholder="Address" readonly>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="secondaryYear">Year Graduated</label>
                                <input type="text" class="form-control" id="secondaryYear" name="second_year" value="<?= session()->second_year ?>" placeholder="Year Graduated" readonly>
                            </div>

                            <div class="col-12 col-lg-4">
                                <label for="senior">Senior Highschool</label>
                                <input type="text" class="form-control" id="senior" name="senior_school" value="<?= session()->senior_school ?>" placeholder="Senior High School" readonly>
                            </div>
                            <div class="col-12 col-lg-5">
                                <label for="seniorAddress">Address</label>
                                <input type="text" class="form-control" id="seniorAddress" name="senior_address" value="<?= session()->senior_address ?>" placeholder="Address" readonly>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="seniorYear">Year Graduated</label>
                                <input type="text" class="form-control" id="seniorYear" name="senior_year" value="<?= session()->senior_year ?>" placeholder="Year Graduated" readonly>
                            </div>
                        </div>
                    </form>
                </section>

                <section id="requirements" class="main-card_content">
                    <h3 class="main-card_title">Requirements</h3>
                    <form action="<?= base_url("user/profile") ?>" method="post" enctype="multipart/form-data">
                        <div class=" form-row">
                            <div class="col-12 col-lg-4 mb-5">
                                <label for="elem">Profile Picture</label>
                            </div>

                            <div class="col-12 col-lg-3">
                                <?php if (!session()->noReq) : ?>
                                    <div class="requirements_btn"><a target="_blank" href="/<?= session()->profile ?>"> View </a> </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-12 col-lg-5">
                                <input type="file" class="form-control" name="profile">
                            </div>

                            <div class="col-12 col-lg-4 mb-5">
                                <label for="elem">Certified True Copy of Registration Form</label>
                            </div>

                            <div class="col-12 col-lg-3">
                                <?php if (!session()->noReq) : ?>
                                    <div class="requirements_btn"><a target="_blank" href="/<?= session()->regForm ?>"> View </a> </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-12 col-lg-5">
                                <input type="file" class="form-control" name="regForm">
                            </div>

                            <div class="col-12 col-lg-4  mb-5">
                                <label for="elem">Certified True Copy of Grades</label>
                            </div>
                            <div class="col-12 col-lg-3">
                                <?php if (!session()->noReq) : ?>
                                    <div class="requirements_btn"><a target="_blank" href="/<?= session()->grades ?>"> View </a> </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-lg-5">
                                <input type="file" class="form-control" name="grades">
                            </div>

                            <div class="col-12 col-lg-4  mb-5">
                                <label for="elem">Photocopy of ID with 3 Signatures</label>
                            </div>
                            <div class="col-12 col-lg-3">
                                <?php if (!session()->noReq) : ?>
                                    <div class="requirements_btn"><a target="_blank" href="/<?= session()->signatures ?>"> View </a> </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-lg-5">
                                <input type="file" class="form-control" name="signatures">
                            </div>
                        </div>
                        <input type="submit" class="main-card_btn"></button>

                    </form>
                </section>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>