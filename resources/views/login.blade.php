<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.rtl.min.css" integrity="sha512-v/0rtuCuKOmpkT153wINc6H7UtLualQIhOpXdmB4Y1KtYBBtg++8UFPyYJBHLmnd2qBbrKvO+eudewymb5FW6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/login.css"/>
</head>
<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <div class="forms-inputs mb-4"> <div>Email or username</div> <input autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                    <div class="forms-inputs mb-4"> <div>Password</div> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                        <div class="invalid-feedback">Password must be 8 character!</div>
                    </div>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Login</button> </div>
                </div>
                <div class="success-data" v-else>
                    <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center">BarokahLS <br> </span> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/javascript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>