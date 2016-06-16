<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <title>entry</title>
</head>
<body>


/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 4/30/2016
 * Time: 1:11 PM
 */


<div class="container">
  <h2>School Player Entry</h2>
  <form role="form">
      <div class="form-group">
          <label for="name">Name of the Applicant:</label>
          <input type="name" class="form-control" id="player-name" placeholder="Enter name">
      </div>
      <div class="form-group">
          <label for="gender">Gender:</label>
          <div>
          <input type="radio" name="gender" value="male" > Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          </div>
      </div>
    <div class="form-group">
      <label for="school">School of the applicant:</label>
        <div >
        <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        </div>
    </div>
      <div class="form-group">
          <label for="dob">Date of birth:</label>
          <input type="dob" class="form-control" id="player-dob" placeholder="Enter DOB">
      </div>
      <div class="form-group" >
          <label for="phono-no">Contact Number:</label>

          <input type="phone-no" class="form-control" id="player-phone-no2" placeholder="Enter optional phone number">

      </div>
      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
          <label for="event">Events:</label>

          <div class="col-md-12" >

              <div class="some-class col-md-6">
                  <input type="radio" class="radio" name="x" value="y" id="y" />
                  <label for="y">Singles</label>
                  <input type="radio" class="radio" name="x" value="z" id="z" />
                  <label for="z">None</label>
              </div>
              <label  for ="age-group" name="singles-age-group">Age Category </label>
              <select>
                  <option value="select">--Select Age Category--</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
              </select>
          </div>


            <div class="col-md-12">
              <div class="some-class col-md-6">
                  <input type="radio" class="radio" name="x" value="y" id="y" />
                  <label for="y">Doubles</label>
                  <input type="radio" class="radio" name="x" value="z" id="z" />
                  <label for="z">None</label>
              </div>

              <label  for ="age-group" name="singles-age-group">Age Category </label>
              <select>
                  <option value="select">--Select Age Category--</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
              </select>

                <div >
                <div class="col-md-12">
                    <div class="col-md-6">
                    <label  for ="age-group" name="singles-age-group">Doubles Partner: </label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Doubles Partner's name">
                        </div>
                    <label  for ="age-group" name="singles-age-group">School </label>

                    <select>
                        <option value="select">--Select Age Category--</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>

                </div>
                </div>

                </div>
          <div>
              <button type="submit" class="btn btn-default">Submit</button>
          </div>


  </form>
</div>

<div class="container">
    <h2>University Team Entry</h2>
    <form role="form">
        <div class="form-group">
            <label for="uni-name">Name of the University:</label>
            <input type="text" class="form-control" id="uni-name" placeholder="Enter name of university">
        </div>
        <div class="form-group">
            <label for="country">Gender:</label>
            <input type="text" class="form-control" id="country" placeholder="Enter country">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" placeholder="Enter gender">
        </div>

        <div class="form-group">
            <label for="uni-players">Enter names of players (Min-5):</label>
            <input type="text" class="form-control" id="uni-player1" placeholder="Enter name of player 1">
            <input type="text" class="form-control" id="uni-player2" placeholder="Enter name of player 2">
            <input type="text" class="form-control" id="uni-player3" placeholder="Enter name of player 3">
            <input type="text" class="form-control" id="uni-player4" placeholder="Enter name of player 4">
            <input type="text" class="form-control" id="uni-player5" placeholder="Enter name of player 5">
            <input type="text" class="form-control" id="uni-player6" placeholder="Enter name of player 6">
            <input type="text" class="form-control" id="uni-player7" placeholder="Enter name of player 7">
            <input type="text" class="form-control" id="uni-player8" placeholder="Enter name of player 8">

        </div>

        <div class="form-group">
            <h3>Past Perfomance</h3>
            <label for="tounament">Tournament Name:</label>
            <input type="text" class="form-control" id="tournament-name" placeholder="Enter name of tournament">
        </div>

        <div class="form-group">
            <label for="tounament-year">Tournament Year:</label>
            <input type="text" class="form-control" id="tournament-year" placeholder="Enter year of the tournament">
        </div>

        <div class="form-group">
            <label for="tounament-place">Tournament Place:</label>
            <input type="text" class="form-control" id="tournament-place" placeholder="Enter place in the tournament">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>


    </form>
    </div>


