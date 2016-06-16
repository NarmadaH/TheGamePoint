/**
 * Created by Achini on 5/1/2016.
 */

function loadTeams() {
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
                //document.getElementById('uni-girls-teams').innerHTML = res;

                var result = JSON.parse(res)
               // alert('abc');
                //alert (result);
                var t=0;
                var TableContent = '<table class="table table-hover table-responsive panel panel-primary"><tr><th>No</th><th>Team ID</th><th >University</th><th>Country</th><th>Players</th><th>Perfomance</th></tr>';

                for (var i = 0; i < result.length; i++) {
                    t++;
                    TableContent += '<tr ><td>' + t + '</td>';
                    TableContent += '<td id = "teamId">' + result[i].team_id + '</td>';
                    TableContent += '<td>' + result[i].university + '</td>';
                    TableContent += '<td>' + result[i].country + '</td>';
                    TableContent += '<td>' + '<button id = "veiw-players" class="btn btn-sm btn-default" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPlayersModal( \'' + result[i].team_id + '\' )"></span> Veiw Players</button></td>';
                    TableContent += '<td>' + '<button id = "veiw-perfomance" class="btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].team_id + '\' )"></span> Veiw Perfomances</button></td>';

                }
                TableContent += '</table>';

                //TableContent+=result.length;
                document.getElementById('uni-girls-teams').innerHTML = TableContent;
            }
        }
        var path = window.location.pathname;
        var page = path.split("/").pop();
        obj.open("GET", "../application/controller/uniteam_controller.php", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }
}

function showPlayersModal(teamid) {
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
                //document.getElementById('uni-girls-teams').innerHTML = res;
                //alert(teamid);
                //alert(res);
                var result = JSON.parse(res)
                // alert(result);
                //alert (result);

                var TableContent = '<table class="table table-hover"><tr><th>Player No</th><th >Name</th></tr>';
                TableContent += '<tr ><td id = "id">' + '1' + '</td>';
                TableContent += '<td>' + result[0].uni_player1 + '</td>';
                TableContent += '<tr ><td id = "id">' + '2' + '</td>';
                TableContent += '<td>' + result[0].uni_player2 + '</td>';
                TableContent += '<tr ><td id = "id">' + '3' + '</td>';
                TableContent += '<td>' + result[0].uni_player3 + '</td>';
                TableContent += '<tr ><td id = "id">' + '4' + '</td>';
                TableContent += '<td>' + result[0].uni_player4 + '</td>';
                TableContent += '<tr ><td id = "id">' + '5' + '</td>';
                TableContent += '<td>' + result[0].uni_player5 + '</td>';
                TableContent += '<tr ><td id = "id">' + '6' + '</td>';
                TableContent += '<td>' + result[0].uni_player6 + '</td>';
                TableContent += '<tr ><td id = "id">' + '7' + '</td>';
                TableContent += '<td>' + result[0].uni_player7 + '</td>';
                TableContent += '<tr ><td id = "id">' + '8' + '</td>';
                TableContent += '<td>' + result[0].uni_player8 + '</td>';

                TableContent += '</table>';

                //TableContent+=result.length;
                document.getElementById('players-modal').innerHTML = TableContent;
                $('#message-modal').modal();
            }
        }
        /*var path = window.location.pathname;
         var page = path.split("/").pop();*/

        var pass = "teamid=" + teamid;
        obj.open("GET", "../application/controller/team_players_controller.php?" + pass, true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }

}

function showPefomanceModal(teamid) {
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
                //document.getElementById('uni-girls-teams').innerHTML = res;
                //alert(teamid);
                //alert(res);
                var result = JSON.parse(res)
                // alert(result);
                //alert (result);for (var i = 0; i < result.length; i++) {
                var TableContent = '';
                if (result == '') {
                    //alert(result);
                    TableContent = "No Past Performances";
                }
                else {
                    //alert(res);
                    //alert(result.length);

                    TableContent = '<table class="table table-hover"><tr><th>Tournament</th><th >Year</th><th >Place</th></tr>';
                    for (var i = 0; i < result.length; i++) {
                        TableContent += '<tr ><td>' + result[i].tounament + '</td>';

                        TableContent += '<td>' + result[i].year + '</td>';

                        TableContent += '<td>' + result[i].place + '</td></tr >';


                        //TableContent+=result.length;
                    }
                    TableContent += '</table>';
                }


            }
            document.getElementById('perfomance-modal').innerHTML = TableContent;
            $('#perfomance-message-modal').modal();
        }
    }
    /*var path = window.location.pathname;
     var page = path.split("/").pop();*/

    var pass = "teamid=" + teamid;
    obj.open("GET", "../application/controller/team_perfomance_controller.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();

}


function rankTeams() {
   // alert('rank teams function');
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
               // alert('passed=not ready');
                // progress
            } else if (obj.readyState === 4) {
              //  alert('ready rank teams');
                var res = obj.responseText;
                //document.getElementById('uni-girls-teams').innerHTML = res;
                //alert(teamid);
                //alert(res);
                var result = JSON.parse(res)
                //alert(result);
                //alert (result[0].tounament +' '+result[0].year+' '+ result[0].place );
                //var myArray = new Array(result.length);


                /*
                 for (var i = 0; i < result.length; i++) {
                 //alert(result[i].tounament +' '+result[i].year+' '+ result[i].place);
                 var passing = result[i].tounament + ' ' + result[i].year + ' ' + result[i].place;
                 var passid = result[i].team_id;
                 alert(result[i].team_id+ ' '+ result[i].tounament + ' ' + result[i].year + ' ' + result[i].place);

                 setRank(passid, passing);


                 }*/
                //document.getElementById('perfomance-modal').innerHTML = TableContent;
                //  $('#perfomance-message-modal').modal();


                /********************************/
                //find & write rank of each team to table
                var success = 0;
                for (var i = 0; i < result.length; i++) {
                    //alert('team with perfomance' + result[i].team_id);
                    findPoints(result[i].team_id);
                    success++;
                   // alert('Rank teams - done wriring points to'+result[i].team_id )
                }


                //alert('Rank teams - points added to all teams')
                //RankTeams();

                //showRank();
            }
        }
    }


    /*var path = window.location.pathname;
     var page = path.split("/").pop();*/

    obj.open("GET", "../application/controller/team_perfomance_rank.php?", true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();

    // var rank1 = "UMiSF Championship 2015 Champion";


}

function RankEachTeams() {
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
                var result = JSON.parse(res)

                var rank = 0;
                var success = 0;
                for (var i = 0; i < result.length; i++) {
                    if (result[i].points == 0) {
                        var zeroRank = 40;
                        //alert('goint to rank this team' + result[i].team_id + ' ' + zeroRank);
                        writeRank(result[i].team_id, zeroRank);
                    } else {
                        rank++;
                        writeRank(result[i].team_id, rank);
                        //alert('goint to rank this team' + result[i].team_id + ' ' + rank);
                        //alert('after write rank');
                    }
                    success = 1;
                }

                //alert('out of for block');
                if (success === 1) {
                   // alert('sucesss= ' + success);
                    showRank();
                    //alert('called show rank');
                }

            }
        }
    }
    obj.open("GET", "../application/controller/points_rank.php?", true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();

    // var rank1 = "UMiSF Championship 2015 Champion";


}

function writeRank(id, rank) {
    var obj;
   // alert('in write rank');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert ('new rqest');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('obj not null');
        obj.onreadystatechange = function () {
            //alert ('on ready function');
            if (obj.readyState < 4) {
                // alert('not ready to write');
                // progress
            } else if (obj.readyState === 4) {
                //alert('not ready to write');

                // alert('now writing rank'+ id +' '+ rank);

                //var result = JSON.parse(res)

            }
        }
    }

    // alert('sooooooooooooooooo');
    var pass = "id=" + id + "&rank=" + rank;
    //alert (id +'has rank '+rank + ' writing..............' );

    obj.open("GET", "../application/controller/team_ranks_controller.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();


}


function setRank(id, string) {

    //alert(myarray);
    //var id = array[0].team_id;
    // var passing = myarray[0].tounament +' '+myarray[0].year+' '+ myarray[0].place;
    //alert(id);
    //alert(string);

    if (string == '') {
        // alert("low ");
    } else {
        // alert("I'm Herer now");
    }

    var rank1 = "UMiSF Championship 2015 Champion";
    var rank2 = "UMiSF Championship 2015 Runners up";
    var rank3 = "Inter University Games 2015 Champion";
    var rank4 = "UMiSF Championship 2015 3rd place";
    var rank5 = "Inter University Games 2015 Runners up";
    var rank6 = "Inter University Games 2015 3rd place";
    var rank7 = "UMiSF Championship 2015 ";
    var rank8 = "UMiSF Championship 2015 ";

    var findteam;

    if (string == rank1) {
        findteam = 1;
    } else if (string == rank2) {
        findteam = 2;
    } else if (string == rank3) {
        findteam = 3;
    } else if (string == rank4) {
        findteam = 4;
    } else if (string == rank5) {
        findteam = 5;
    } else if (string == rank6) {
        findteam = 6;
    } else if (string == rank7) {
        findteam = 7;
    }

    //alert(findteam);

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

                //var result = JSON.parse(res)

            }
        }
    }
    /*var path = window.location.pathname;
     var page = path.split("/").pop();*/

    var pass = "id=" + id + "&rank=" + findteam;
    //alert("look"+ id);
    obj.open("GET", "../application/controller/team_setRank_controller.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();
}

//qurey team perfomances & find points
function findPoints(team_id) {
    // alert('I came here!!');
    //alert(team_id);
    var umisf1 = 4;
    var umisf2 = 2.25;
    var iu1 = 1.25;
    var iu2 = 1;
    var umisf3 = 0.75;
    var iu3 = 0.20;

    var pera1 = 0.05;
    var kel1 = 0.05;
    var wes1 = 0.05;
    var pera2 = 0.025;
    var kel2 = 0.025;
    var wes2 = 0.025;
    var pera3 = 0.001;
    var kel3 = 0.001;
    var wes3 = 0.001;

    var umisf1_name = "UMiSF Championship 2015 Champion";
    var umisf2_name = "UMiSF Championship 2015 Runners up";
    var iu1_name = "Inter University Games 2015 Champion";
    var iu2_name = "Inter University Games 2015 Runners up";
    var umisf3_name = "UMiSF Championship 2015 3rd Place";
    var iu3_name = "Inter University Games 2015 3rd Place";

    var pera1_name = "Pera Smashes Championship 2015 Champion";
    var kel1_name = "Faster Championship 2015 Champion";
    var wes1_name = "Western Province Championship 2015 Champion";
    var pera2_name = "Pera Smashes Championship 2015 Runners up";
    var kel2_name = "Faster Championship 2015 Runners up";
    var wes2_name = "Western Province Championship 2015 Runners up";
    var pera3_name = "Pera Smashes Championship 2015 3rd Place";
    var kel3_name = "Faster Championship 2015 3rd Place";
    var wes3_name = "Western Province Championship 2015 2nd Runner up";

    var myPoints = 0;

    var obj;
    //alert('fnd points - 1');
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert('fnd points- 2');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
        // alert('fnd points- 3');
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        // alert('find points - not null obj - 4');
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                //alert('on ready - 5');
                // progress
            } else if (obj.readyState === 4) {
                //alert('ready - 6');
               // alert("ready - so in here");
                var res = obj.responseText;
               // alert(res);

                //generateDraw(res);
                var result = JSON.parse(res);

                for (var i = 0; i < result.length; i++) {
                    //alert(result[i].tounament +' '+result[i].year+' '+ result[i].place);
                    var passing = result[i].tounament + ' ' + result[i].year + ' ' + result[i].place;
                   // alert(result[i].tounament + ' ' + result[i].year + ' ' + result[i].place + '*');

                    if (passing === "UMiSF Championship 2015 Champion") {

                        myPoints = myPoints + umisf1;
                       // alert('counting');
                       // alert(myPoints);

                    } else if (passing === "UMiSF Championship 2015 Runners up") {
                        myPoints += umisf2;
                       // alert('counting');
                       // alert(myPoints);

                    } else if (passing === "Inter University Games 2015 Champion") {
                        myPoints += iu1;
                        //alert('counting');
                        //alert(myPoints);

                    } else if (passing === "Inter University Games 2015 Runners up") {
                        myPoints += iu2;
                        //alert('counting');
                        //alert(myPoints);

                    } else if (passing === "UMiSF Championship 2015 3rd Place") {
                        myPoints += umisf3;
                        //alert('counting');
                        //alert(myPoints);

                    } else if (passing == "Inter University Games 2015 3rd Place") {
                        myPoints += iu3;
                       // alert('counting');
                        //alert(myPoints);

                    } else if (passing === "Pera Smashes Championship 2015 Champion") {
                        myPoints += pera1;
                       // alert('counting');
                        //alert(myPoints);
                    } else if (passing === "Faster Championship 2015 Champion") {
                        myPoints += kel1;
                        //alert('counting');
                        //alert(myPoints);
                    } else if (passing === wes1_name) {
                        myPoints += wes1;
                        //alert('counting');
                        //alert(myPoints);
                    } else if (passing === pera2_name) {
                        myPoints += pera2;
                        //alert('counting');
                        //alert(myPoints);
                    } else if (passing === kel2_name) {
                        myPoints += kel2;
                       // alert('counting');
                       // alert(myPoints);
                    } else if (passing === wes2_name) {
                        myPoints += wes2;
                       // alert('counting');
                       // alert(myPoints);

                    } else if (passing === "Pera Smashes Championship 2015 3rd Place") {
                        myPoints += pera3;
                        //alert('counting');
                        //alert(myPoints);
                    } else if (passing === kel3_name) {
                        myPoints += kel3;
                        //alert('counting');
                        //alert(myPoints);
                    } else if (passing === "Faster Championship 2015 3rd Place") {
                        myPoints += wes3;
                       // alert('counting');
                        alert(myPoints);
                    } else {
                       // alert('no match');
                    }


                }
               // alert(team_id + ' has points ' + myPoints);
                addPoints(team_id, myPoints);
                //alert('after adding points');


            }
        }

    }


    var pass = "id=" + team_id;

    obj.open("GET", "../application/controller/team_setPoints_controller.php?" + pass, true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();


   // alert('find points - out of it');
}


function addPoints(team_id, myPoints) {
   // alert('came to add points');
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
       // alert('here i am');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        //alert('not null');
        //alert('go in');
        obj.onreadystatechange = function () {
            //alert('add points - not null ====================');
            if (obj.readyState < 4) {
                //alert('progress');
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                //alert('add poits - object ready');
                //alert('now here');

                /*var content = '<div style="margin: 10px;"><p>';
                content+=  'Points were calculated for each team depending on their past performances. Please click the GENERATE TEAM RANKS button to proceed</p><button class="btn btn-sm btn-success"';

                content+= '<button class="btn btn-danger""  <span class="glyphicon glyphicon-pencil" ></span> Okay</button>';

                document.getElementById('message-modal-content').innerHTML = content;*/
                $('#successModal').modal();
            }

        }

        var pass = "id=" + team_id + "&points=" + myPoints;
       // alert(team_id + ' has ' + myPoints);
        //alert('add points - done saving points');

        // alert('add points - not saving points');

        obj.open("GET", "../application/controller/team_savePoints_controller.php?" + pass, true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }
}


function showRank() {
    var obj;
    //alert('in show rank');

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

                //generateDraw(res);
                var result = JSON.parse(res);


                var TableContent = '<h3 align="center" style="padding-top: 50px;">Team Ranks</h3>';
                TableContent += ' <div class="panel panel-primary">';
                TableContent += '<table class="table table-hover"><tr><th>Team ID</th><th >University</th><th>Rank</th><th>Points</th><th>Performance</th></tr>';

                for (var i = 0; i < result.length; i++) {


                    if (result[i].rank == 40) {
                        TableContent += '<tr ><td bgcolor = #9dfb9d id = "teamId">' + result[i].team_id + '</td>';
                        TableContent += '<td bgcolor = #9dfb9d>' + result[i].university + '</td>';
                        TableContent += '<td bgcolor = #9dfb9d id = "no-rank-row">' + '0' + '</td>';
                        TableContent += '<td bgcolor = #9dfb9d>' + result[i].points + '</td>';
                        TableContent += '<td bgcolor = #9dfb9d>' + '<button id = "veiw-perfomance" class="btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].team_id + '\' )"></span> Veiw Perfomances</button></td>';
                    } else {
                        TableContent += '<tr ><td bgcolor=" #33cc33" id = "teamId">' + result[i].team_id + '</td>';
                        TableContent += '<td bgcolor=" #33cc33">' + result[i].university + '</td>';
                        TableContent += '<td bgcolor=" #33cc33" >' + result[i].rank + '</td>';
                        TableContent += '<td bgcolor =" #33cc33">' + result[i].points + '</td>';
                        TableContent += '<td bgcolor ="#33cc33">' + '<button id = "veiw-perfomance" class="btn btn-sm btn-info" type="button" <span class="glyphicon glyphicon-pencil" onclick="showPefomanceModal( \'' + result[i].team_id + '\' )"></span> Veiw Perfomances</button></td>';


                    }
                }
                TableContent += '</table>';
                TableContent += '</div>';

                //TableContent += '<div style="padding-top: 20px;" class="form-group tm-yellow-gradient-bg text-center">';
                //TableContent += '<button id="point-scheme" type="button" class="tm-yellow-btn" onclick="pointScheme()">View Point Scheme</button></div>';

                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                TableContent += '<button id="smthing" type="button" class="tm-yellow-btn" onclick="generateDraw()">Generate Groups</button></div>';


                //TableContent+=result.length;
                document.getElementById('rank-table').innerHTML = TableContent;
                window.location = "#rank-table";

                //$('#message-modal').modal();
            }
        }

        // var pass = "teamid=" + teamid;
        obj.open("GET", "../application/controller/team_setRank_controller.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }
}


function generateDraw() {
    //alert(that);

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

                ////////////
                var result = JSON.parse(res);
                //alert(result[0].university)

                var all = [];
                for (var i = 0; i < result.length; i++) {
                    all.push(result[i].university)
                }
                //alert(all);

                var group1 = [];
                var group2 = [];
                var group3 = [];
                var group4 = [];


                var div = Math.floor(result.length / 4);
                var rem = result.length % 4;
                var rounds = div;
                if (rem > 0) {
                    rounds++;
                }

                //alert(rounds);

                for (var x = 0; x < rounds; x++) {
                    if (x != rounds - 1) {
                        if (x % 2 == 0) {
                            group1.push(all[0 + (4 * x)]);
                            group2.push(all[1 + (4 * x)]);
                            group3.push(all[2 + (4 * x)]);
                            group4.push(all[3 + (4 * x)]);
                        }
                        else {
                            group4.push(all[0 + (4 * x)]);
                            group3.push(all[1 + (4 * x)]);
                            group2.push(all[2 + (4 * x)]);
                            group1.push(all[3 + (4 * x)]);
                        }
                    }
                    else {
                        group4.push(all[0 + (4 * x)]);
                        group3.push(all[1 + (4 * x)]);
                        group2.push(all[2 + (4 * x)]);
                        group1.push(all[3 + (4 * x)]);
                    }
                }
                //alert(group1);
                //alert(group2);
                //alert(group3);
                //alert(group4);

                //alert("grop 1 length"+ group1.length);


                ///////////////
                var groupNumber =0;
                var TableContent = '<h2 class="tm-section-title" style="padding-top: 50px;">Girls Draw</h2>';
                TableContent += ' <div class="panel panel-danger">';
                TableContent += '<h3 align="center">Group A</h3>';
                TableContent += '<table class="table table-hover"><tr><th></th></tr>';
                for (var i = 0; i < group1.length; i++) {
                    if (group1[i] != undefined) {
                        groupNumber = 1;
                        TableContent += '<tr><td bgcolor =#e18be6>' + group1[i] + '</td>';
                        AddGroupNumber(group1[i],groupNumber );
                    }
                }
                TableContent += '</tr></table>';


                TableContent += '<h3 align="center">Group B</h3>';
                TableContent += '<table class="table table-hover"><tr><th></th></tr>';

                for (var i = 0; i < group4.length; i++) {
                    if (group4[i] != undefined) {
                        groupNumber = 4;
                        TableContent += '<tr><td bgcolor =#a2f1e1>' + group4[i] + '</td>';
                        AddGroupNumber(group4[i],groupNumber );
                    }
                }
                TableContent += '</tr></table>';


                TableContent += '<h3 align="center">Group C</h3>';
                TableContent += '<table class="table table-hover"><tr><th></th></tr>';

                for (var i = 0; i < group3.length; i++) {
                    if (group3[i] != undefined) {
                        groupNumber = 3;
                        TableContent += '<tr><td bgcolor="#ffe766">' + group3[i] + '</td>';
                        AddGroupNumber(group3[i],groupNumber );
                    }
                }
                TableContent += '</tr></table>';


                TableContent += '<h3 align="center">Group D</h3>';
                TableContent += '<table class="table table-hover"><tr><th></th></tr>';

                for (var i = 0; i < group2.length; i++) {
                    if (group2[i] != undefined) {
                        groupNumber = 2;
                        TableContent += '<tr><td bgcolor="#66c1c1">' + group2[i] + '</td>';
                        AddGroupNumber(group2[i],groupNumber );
                    }
                }
                TableContent += '</tr></table>';
                TableContent+='</div>';

                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                TableContent += '<button id="smthing2" type="button" class="tm-yellow-btn hidden-print" onclick="finalDraw()">View Draw</button></div>';


                //TableContent+=result.length;
                document.getElementById('draw-tables').innerHTML = TableContent;
                window.location = "#draw-tables";
                //$('#message-modal').modal();
            }
        }

        // var pass = "teamid=" + teamid;
        obj.open("GET", "../application/controller/team_setRank_controller.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();

    }
}


function finalDraw() {

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

                //var result = JSON.parse(res)

                var TableContent = '<h2 class="tm-section-title" style="padding-top: 50px;">Knockout Draw</h2>';
                TableContent += ' <div class="panel panel-danger">';

                TableContent += '<p>Only the number 1 and 2 teams of each group will advanced to the final. To choose those two teams a group stage will be played, where each team plays with all teams in the group.The two teams with the highest winning points will advanced to the main draw.</p>';

                TableContent += '<p>Eight teams will play the final stage. It is a knockout round. </p>';

                TableContent += ' <center><img src="../dist/images/theDraw.jpg" align="center" alt="image" ></center>';

                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                TableContent += '<button id="print-draw" type="button" class="tm-yellow-btn hidden-print" onclick="printDiv(\'' + 'draw-tables' + '\' )">Print Draw</button></div>';

                TableContent+= '</div>';

                document.getElementById('draw-final').innerHTML = TableContent;
                window.location = "#draw-final";
                //  $('#perfomance-message-modal').modal();
            }
        }

        obj.open("GET", "../application/controller/team_perfomance_rank.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        obj.send();
    }


}


function pointScheme() {
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

                var TableContent = '';


                TableContent = '<table class="table table-hover"><tr><th>Performance</th><th>Points</th></tr>';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Runners up" + '</td>';
                TableContent += '<td>' + "2.25" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';

                TableContent += '<tr ><td>' + "UMiSF Championship 2015 Champion" + '</td>';
                TableContent += '<td>' + "4" + '</td></tr >';


                //TableContent+=result.length;

                TableContent += '</table>';


                document.getElementById('scheme-modal').innerHTML = TableContent;
                $('#point-scheme-modal').modal();
            }
        }

    }

    obj.open("GET", "../application/controller/team_perfomance_rank.php?", true);
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    obj.send();

    /*var path = window.location.pathname;
     var page = path.split("/").pop();*/

}


function printDraw() {
    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    }

    $('#print-draw').click(function () {
        doc.fromHTML($('#draw-tables').html(), 500, 500, {
            'width': 1500,
            //'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });
    
}


function AddGroupNumber(university, group) {
    //alert('came to add group no');
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert('here i am');
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
            }
        }
    }
    var pass = "university=" + university + "&group=" + group;
   // alert(university + ' has ' + group);
    obj.open("GET", "../application/controller/add_group.php?" + pass, true);
    //alert('sent');
    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    obj.send();
    
}


function MakeSchedule(){
    generateDraw();
    
    var obj;

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
        //alert('here i am');
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {

            if (obj.readyState < 4) {

            } else if (obj.readyState === 4) {
                var response = obj.responseText;
               // alert(response);
                var result = JSON.parse(response);

                var group1 = [];
                var group2 = [];
                var group3 = [];
                var group4 = [];
                for (var i = 0; i < result.length; i++) {
                    if (result[i].groupNo == 1){
                        group1.push(result[i].university)
                    } else if (result[i].groupNo == 2){
                        group2.push(result[i].university)
                    }else if (result[i].groupNo == 3){
                        group3.push(result[i].university)
                    }else if (result[i].groupNo == 4){
                        group4.push(result[i].university)
                    }
                }

                var TableContent = '<h2 class="tm-section-title" style="padding-top: 50px;">Girls Match Schedule</h2>';
                TableContent += '<h3 align="center">Group A</h3>';
               // TableContent += '<table class="table table-hover"><tr><th></th><th></th><th></th></tr>';
                TableContent += '<table class="table table-hover"><tr><th>Match No</th><th >Game</th><th>Court</th><th>Time (00:00)</th></tr>';

                var g1=0;
                var court1 = 1;
                var t1 = 08.00;
                var time1 = t1.toFixed(2);
                for (var i = 0; i < Math.floor(result.length / 2); i++) {
                    for (var x=i ; x<group1.length; x++){
                        if (x!=i){
                            g1++;
                            TableContent += '<tr ><td bgcolor =#e18be6>' + g1  + '</td>';
                            TableContent += '<td bgcolor =#e18be6 ">' + group1[i] +' vs. '+ group1[x]+ '</td>';
                            TableContent += '<td bgcolor =#e18be6 >' + court1 + '</td>';
                            TableContent += '<td bgcolor =#e18be6>' + t1.toFixed(2) + '</td>';
                            t1++;

                        }

                    }

                }
                TableContent += '</tr></table>';


                TableContent += '<h3 align="center">Group B</h3>';
                TableContent += '<table class="table table-hover"><tr><th>Match No</th><th >Game</th><th>Court</th><th>Time (00:00)</th></tr>';

                var g4=0;
                var court4 = 2;
                var t4 = 08.00;
                for (var i = 0; i < Math.floor(result.length / 2); i++) {
                    for (var x=i ; x<group4.length; x++){
                        if (x!=i){
                            g4++;
                            TableContent += '<tr ><td bgcolor =#a2f1e1>' + g4  + '</td>';
                            TableContent += '<td bgcolor =#a2f1e1 >' + group4[i] +' vs. '+ group4[x]+ '</td>';
                            TableContent += '<td bgcolor =#a2f1e1 >' + court4 + '</td>';
                            TableContent += '<td bgcolor=#a2f1e1>' + t4.toFixed(2) + '</td>';
                            t4++;

                        }

                    }

                }

                TableContent += '</tr></table>';


                var g3=0;
                var court3 = 3;
                var t3 = 08.00;
                TableContent += '<h3 align="center">Group C</h3>';
                TableContent += '<table class="table table-hover"><tr><th>Match No</th><th >Game</th><th>Court</th><th>Time (00:00)</th></tr>';

                for (var i = 0; i < Math.floor(result.length / 2); i++) {
                    for (var x=i ; x<group3.length; x++){
                        if (x!=i){
                            g3++;
                            TableContent += '<tr ><td bgcolor =#ffe766>' + g3  + '</td>';
                            TableContent += '<td bgcolor =#ffe766 >' + group3[i] +' vs. '+ group3[x]+ '</td>';
                            TableContent += '<td bgcolor =#ffe766 >' + court3 + '</td>';
                            TableContent += '<td bgcolor=#ffe766>' + t3.toFixed(2) + '</td>';
                            t3++;

                        }
                    }
                }
                TableContent += '</tr></table>';

                var g2=0;
                var court2 = 1;

                TableContent += '<h3 align="center">Group D</h3>';
                TableContent += '<table class="table table-hover"><tr><th>Match No</th><th >Game</th><th>Court</th><th>Time (00:00)</th></tr>';

                for (var i = 0; i < Math.floor(result.length / 2); i++) {
                    for (var x=i ; x<group2.length; x++){
                        if (x!=i){
                            g2++;
                            TableContent += '<tr ><td bgcolor =#66c1c1>' + g2  + '</td>';
                            TableContent += '<td bgcolor =#66c1c1 >' + group2[i] +' vs. '+ group2[x]+ '</td>';
                            TableContent += '<td bgcolor =#66c1c1 >' + court2 + '</td>';
                            TableContent += '<td bgcolor=#66c1c1>' + t1.toFixed(2) + '</td>';
                            t1++;

                        }

                    }
                }
                TableContent += '</tr></table>';


                TableContent += '<h3 class="tm-section-title" style="padding-top: 50px;">Knockout Draw</h3>';
                TableContent += ' <div class="panel panel-danger">';
                TableContent += ' <center><img src="../dist/images/draw-2.png" align="center" alt="image" ></center>';
                TableContent += '<div class="form-group tm-yellow-gradient-bg text-center">';
                //TableContent += '<button id="print-draw" type="button" class="tm-yellow-btn" onclick="window.print() ;" target="_blank">Print Schedule</button></div>';
                TableContent += '<button id="print-draw" type="button" class="tm-yellow-btn" onclick="printDiv(\'' + 'draw-matches' + '\' )">Print Schedule</button></div>';

                TableContent+= '</div>';



                //TableContent+=result.length;
                document.getElementById('draw-matches').innerHTML = TableContent;
                window.location = "#draw-matches";



                //$('#message-modal').modal();


            }
        }


        obj.open("GET", "../application/controller/team_schedule.php?", true);
        //alert('sent');
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }
    
    
}

function openWin()
{
    var myWindow=window.open('','','width=2000,height=1000');
    myWindow.document.write("uniteam_girls_table.php");

    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();

}

function printing() {
    var printPage = window.open(document.URL, '_blank');
    setTimeout(printPage.print(), 5);

}
function PrintElem(elem)
{
    Popup($(elem).html());
}

function Popup(data)
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    mywindow.document.write('<html><head><title>my div</title>');
    /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10

    mywindow.print();
    mywindow.close();


}

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}