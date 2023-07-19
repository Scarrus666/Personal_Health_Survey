<?php
session_start();

if (!isset($_SESSION['responses'])) {
    $_SESSION['responses'] = array();
}