/**
 * Created by Achini on 4/27/2016.
 */
function loadFormData() {

    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                //alert(res);

                var modalContent = '<div style="margin: 10px;"><p>';
                if (res == 'success') {
                    var depts = JSON.parse(res).name;
                    document.getElementsByID('address').value=depts;
                } else {

                }

            }
        }
        obj.open("POST", "http://localhost/test.php", true);

        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        //alert(parameter);
        obj.send();
    }

}
$('#entry').click(function openSchool () {
    $('#modalButton').click();
});

$('#entry1').click(function openUni () {
    $('#modalButton1').click();
});
