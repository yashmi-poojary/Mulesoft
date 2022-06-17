<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>INSERT</title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
</head>
<body>



<br>

<div align="center" style="margin-top:20px">
    <button id="teachermanual" class="btn btn-success btn-lg" style="margin-top:25px">ADD MOVIE</button>
</div>

<div id="myModal" class="modal">

    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add movie</h2>
        </div>
        <div class="modal-body" >
            <div style="display:none" id="addTeacherForm">
                <form action="insertval.php" method="POST">
                    <div class="form-group">
                        <label for="teachername">Movie title</label>
                        <input type="text" class="form-control" id="tite" name="MN"
                               placeholder="enter title ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Actor name</label>
                        <input type="text" class="form-control" id="act"name="AN" placeholder="enter actor name ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Actress name</label>
                        <input type="text" class="form-control" id="actrs" name="LN" placeholder="enter actress name">
                    </div>
                    <div class="form-group">
                        <label for="TF">Director name</label>
                        <input type="text" class="form-control" id="dir" name="DN" placeholder="enter director name">
                    </div>
                    <div class="form-group">
                        <label for="TF">Year of release</label>
                        <input type="text" class="form-control" id="rel" name="Y" placeholder="enter release year">
                    </div>


                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>

    var modal = document.getElementById('myModal');
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");

    var span = document.getElementsByClassName("close")[0];

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        facultyForm.style.display = "block";


    }

    span.onclick = function () {
        modal.style.display = "none";
        facultyForm.style.display = "none";

    }


    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

 

    <table id=teacherstable style="margin-left: 80px">
        <caption><strong>Movie's Information </strong></caption>
        <tr>
            <th width="130">Title</th>
            <th width=290>Actor name</th>
            <th width=50>Actress name</th>
            <th width="190">Director</th>
            <th width="40">Release year</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "movie"),
            "SELECT * FROM movies");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['title']}</td>
                    <td>{$row['actor_name']}</td>
                    <td>{$row['actress_name']}</td>
                    <td>{$row['dir_name']}</td>
                    <td>{$row['release_year']}</td>
                    </tr>\n";
        }
        ?>
        </tbody>
    </table>

</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/scrollReveal.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>