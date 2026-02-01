<div class="container">
    <h1 class="heading">Signup</h1>
    <form method="post" action="./server/requests.php">
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">Username :</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="Email" class="form-label">Email :</label>
            <input type="text" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="mb-3 sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="exampleInputPassword1" class="form-label">Password :</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
        </div>
        <button type="submit" name="signup" class="btn btn-primary offset-sm-3">Signup</button>
    </form>
</div>