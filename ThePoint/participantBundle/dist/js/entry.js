/**
 * Created by Achini on 5/1/2016.
 */

//University entry
var totalClick = 0;
var totClick =0;

function showUniEntry() {

    $('#modalWindow8').modal();
}

function loadPerformanceGroup(buttonID) {
   document.getElementById(buttonID).innerHTML = 'Add Another Performance';
    //elem.firstChild.data == "sdbibcsduhc";


    if (totalClick == 0) {
        $('#add_1').show('fast');
        //document.getElementById(buttonID).innerHTML = 'Add Another Performance 12344444';
        totalClick++;
    } else if (totalClick == 1) {
        $('#add_2').show('fast');
        totalClick++;
    } else if (totalClick == 2) {
        $('#add_3').show('fast');
        totalClick++;
    } else if (totalClick == 3) {
        $('#add_4').show('fast');
        totalClick++;
    } else if (totalClick == 4) {
        $('#add_5').show('fast');
        totalClick++;
    }
}


//school entry

function showSchoolEntry() {

    $('#modalWindow4').modal();
}

function loadPerformanceSchool(buttonID) {
    document.getElementById(buttonID).innerHTML = 'Add Another Performance';
    //elem.firstChild.data == "sdbibcsduhc";


    if (totClick == 0) {
        $('#adding_1').show('fast');
        //document.getElementById(buttonID).innerHTML = 'Add Another Performance 12344444';
        totClick++;
    } else if (totClick == 1) {
        $('#adding_2').show('fast');
        totClick++;
    } else if (totClick == 2) {
        $('#adding_3').show('fast');
        totClick++;
    } else if (totClick == 3) {
        $('#adding_4').show('fast');
        totClick++;
    } else if (totClick == 4) {
        $('#adding_5').show('fast');
        totClick++;
    }
}

function showMessage() {

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

            } else if (obj.readyState === 4) {
                var res = obj.responseText;

                var modalContent = '<div style="margin: 10px;"><p>';
                /*if (res == 'success') {
                    modalContent += 'You request was ' + (requestType == 'Add' ? 'added' : 'edited') + ' successfully. An admin will review your request and accept it if possible</p><button class="btn btn-sm btn-success"';
                } else {
                    modalContent += 'An error occured in ' + (requestType == 'Add' ? 'adding' : 'editing') + ' your request. Sorry for the inconvenience.</p><div style="text-align: center;"><button class="btn btn-sm btn-danger"';
                }*/

                modalContent += 'You entry was ' + 'submitted' + ' successfully!</p><button class="btn btn-sm btn-success"';

                modalContent += ' onclick=\'$("#message-modal").modal("hide");\'>Ok</button><div></div>';
                document.getElementById('message-modal-content').innerHTML = modalContent;
                
            }
        }
    }
    obj.open("GET", "../application/controller/submit.php?", true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    obj.send();
    
}


function enableSelect() {
    document.getElementById('single-age-group').disabled=false;
    
}

function enableSelect2() {
    document.getElementById('doubles-age-group').disabled=false;
    document.getElementById('double-partner-name').disabled=false;
    document.getElementById('partner-school').disabled=false;

}