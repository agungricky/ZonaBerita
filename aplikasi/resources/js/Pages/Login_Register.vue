<script setup>
import { Link } from "@inertiajs/vue3";
import logo from "../../../../public/admin/assets/img/logo.png";
const props = defineProps({
    page: String,
    message: String,
    submessage: String,
});
</script>

<template>
    <div>
        <main>
            <div class="container">
                <section
                    class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                                <div class="d-flex justify-content-center py-4">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img :src="logo" alt="" />
                                        <span class="d-none d-lg-block">NiceAdmin</span>
                                    </a>
                                </div>
                                <!-- End Logo -->

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">
                                                {{ message }}
                                            </h5>
                                            <p class="text-center small">
                                                {{ submessage }}
                                            </p>
                                        </div>

                                        <form class="row g-3 needs-validation" novalidate>
                                            <!-- --------- Login ------------ -->
                                            <div class="col-12" v-if="page == 'Login'">
                                                <label for="yourUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" name="username" class="form-control"
                                                        id="yourUsername" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your username.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Login'">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="yourPassword" required />
                                                <div class="invalid-feedback">
                                                    Please enter your password!
                                                </div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Login'">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        value="true" id="rememberMe" />
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                </div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Login'">
                                                <p class="small mb-0">
                                                    Don't have account?
                                                    <Link href="register">Create an account</Link>
                                                </p>
                                            </div>

                                            <div class="col-12" v-if="page == 'Login'">
                                                <button class="btn btn-primary w-100" type="submit">
                                                    Login
                                                </button>
                                            </div>
                                            <!-- --------- /Login ------------ -->

                                            <!-- --------- Register ------------ -->
                                            <div class="col-12" v-if="page == 'Register'">
                                                <label for="yourName" class="form-label">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="yourName"
                                                    required>
                                                <div class="invalid-feedback">Please, enter your name!</div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <label for="yourEmail" class="form-label">Your Email</label>
                                                <input type="email" name="email" class="form-control" id="yourEmail"
                                                    required>
                                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <label for="yourUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" name="username" class="form-control"
                                                        id="yourUsername" required>
                                                    <div class="invalid-feedback">Please choose a username.</div>
                                                </div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="yourPassword" required>
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="terms" type="checkbox"
                                                        value="" id="acceptTerms" required>
                                                    <label class="form-check-label" for="acceptTerms">I agree and accept
                                                        the <a href="#">terms and conditions</a></label>
                                                    <div class="invalid-feedback">You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <p class="small mb-0">Already have an account? 
                                                    <Link href="login">Log in</Link>
                                                </p>
                                            </div>

                                            <div class="col-12" v-if="page == 'Register'">
                                                <button class="btn btn-primary w-100" type="submit">Create
                                                    Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="credits">
                                    <!-- All the links in the footer should remain intact. -->
                                    <!-- You can delete the links only if you purchased the pro version. -->
                                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                    Designed by
                                    <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </div>
</template>