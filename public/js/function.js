function getConfirmation() {
    var retval = confirm("Delete user account " + " Are you sure you want to delete this record?");
    if (retval == true) {
        alert("This record has been successfully deleted.")
        return true;
    } else {
        return false;
    }
}