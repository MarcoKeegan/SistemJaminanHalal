<div class="container-login">
    <div class="wrapper-login">
        <h2>Login</h2>
        <form action="<?php echo BASEURL; ?>/login/masuk" method="POST"> <!-- Attention!!!! -->
        <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo BASEURL; ?>/register">Create an account!</a></p>
        </form>
    </div>
</div>