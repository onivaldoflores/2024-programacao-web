<?php
    include_once('header.php');
?>

        <main class="content">
            <h1>Login</h1>
            <form action="/login" method="POST">
                <div class="campos">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="campos">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" value="Login">
            </form>
        </main>

<?php

