<?php

include "config.php";

class dbEditor
{


    function addUsers()
    {


        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $country_id = ($_POST['country_id']);
        if (empty($name) || empty($email) || empty($country_id)) {

            if (empty($name)) {
                echo '<script language="javascript">';
                echo 'alert("Name field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

            }

            if (empty($email)) {
                echo '<script language="javascript">';
                echo 'alert("Email field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

            }

            if (empty($country_id)) {
                echo '<script language="javascript">';
                echo 'alert("country  field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

            }
        } else {

            global $mysqli;

            $this-> $result = mysqli_query($mysqli, "INSERT INTO users(name,email,country_id) VALUES('$name','$email','$country_id')");
            echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";


        }

    }

    function addCountries()
    {
        $country = ($_POST['country_s']);

        if (empty($country)) {
            echo '<script language="javascript">';
            echo 'alert("country  field is empty.")';
            echo '</script>';
            echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";



        } else {


            global $mysqli;
            $result = mysqli_query($mysqli, "INSERT INTO countries (country) VALUE('$country')");
            echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";


        }
    }








    function editUsers()  {

        $edit_id = (int) key($_POST['edit_user']);
        $name = ( $_POST["name"]);
        $email = ( $_POST['email']);
        $country_id =( $_POST['country_id']);

        if (empty($name) || empty($email) || empty($country_id)) {

            if (empty($name)) {
                echo '<script language="javascript">';
                echo 'alert("Name field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";


            }

            if (empty($email)) {
                echo '<script language="javascript">';
                echo 'alert("Email field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

            }

            if (empty($country_id)) {
                echo '<script language="javascript">';
                echo 'alert("country  field is empty.")';
                echo '</script>';
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

            }
        }
        else {



                global $mysqli;
                $result = mysqli_query($mysqli, "UPDATE users SET name='$name', email='$email', country_id='$country_id'  WHERE id='$edit_id'");
                echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

        }

    }
    function editCountries()

    {
        $edit_id = (int) key($_POST['edit_country']);

        $country =( $_POST['country']);

        if (empty($country)) {
            echo '<script language="javascript">';
            echo 'alert("country  field is empty.")';
            echo '</script>';
            echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

        }
        else {


            global $mysqli;
            $result = mysqli_query($mysqli, "UPDATE countries SET  country='$country'  WHERE id='$edit_id'");


           echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

        }



    }

    function deleteUsers()
    {

        $edit_id = (int) key($_POST['delete_user']);
        global $mysqli;


        $result = mysqli_query($mysqli, "DELETE FROM users  WHERE id='$edit_id'");
        echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";


    }

    function deleteCounries()
    {
        $edit_id = (int) key($_POST['delete_country']);
        global $mysqli;
        $result = mysqli_query($mysqli, "DELETE FROM countries  WHERE id='$edit_id'");
        echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";




    }
}
