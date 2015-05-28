<?php
/**
 * Created by PhpStorm.
 * User: Luka
 * Date: 26.3.2015.
 * Time: 11:01
 */

    session_start();
    session_destroy();
    header("Location: login.html");