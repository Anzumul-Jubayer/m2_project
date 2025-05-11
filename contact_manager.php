<?php
$name1 = "";
$phone_Number1 = "";
$name2 = "";
$phone_Number2 = "";

while (true) {
    echo "\n*********Contact Manager*********\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Enter a choice: ";
    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($name1 == "") {
            echo "Enter a name (contact 1): ";
            $name1 = trim(fgets(STDIN));
            echo "Enter a phone number (contact 1): ";
            $phone_Number1 = trim(fgets(STDIN));
        } elseif ($name2 == "") {
            echo "Enter a name (contact 2): ";
            $name2 = trim(fgets(STDIN));
            echo "Enter a phone number (contact 2): ";
            $phone_Number2 = trim(fgets(STDIN));
        } else {
            echo "You have already added two contacts.\n";
        }

    } elseif ($choice == "2") {
        if ($name1 != "") {
            echo "CONTACT 1 ==> $name1 | $phone_Number1\n";
        }
        if ($name2 != "") {
            echo "CONTACT 2 ==> $name2 | $phone_Number2\n";
        }
        if ($name1 == "" && $name2 == "") {
            echo "No contact saved.\n";
        }

    } elseif ($choice == "3") {
        echo "Goodbye\n";
        break;

    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
?>
