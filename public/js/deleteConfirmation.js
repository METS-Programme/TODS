/**
 * Created by imwota on 7/18/17.
 */
function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete this record?");
    if (x)
        return true;
    else
        return false;
}
