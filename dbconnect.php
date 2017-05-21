<?php

$conn = mysqli_connect("localhost", "root", "", "credentials");

if(!$conn) {
    die("Connection failed!!!");
}
