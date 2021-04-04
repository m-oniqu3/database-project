<!DOCTYPE html>

<head>
    <title>Input</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            var html =
                '<tr><td><select class="form-control" id="ingredient" name="ingredient[]" required><option class="form-control" selected disabled> -- Ingredient List -- </option><option class="form-control" value="Sauce">Sauce</option><option class="form-control" value="Wheat">Wheat</option><option class="form-control" value="Grains">Grains</option><option class="form-control" value="Seasoning">Seasoning</option><option class="form-control" value="Vegetables">Vegetables</option><option class="form-control" value="Dairy">Dairy</option><option class="form-control" value="Fruits">Fruits</option><option class="form-control" value="Beans">Beans</option></select></td><td><select class="form-control" id="measurement" name="measurement[]" required><option class="form-control" selected disabled> -- Measurement List -- </option><option class="form-control" value="1 cup">1 Cup</option><option class="form-control" value="1/2 cup">1/2 Cup</option><option class="form-control" value="1 ounce">1 ounce</option><option class="form-control" value="1 tablespoon">1 tablespoon</option><option class="form-control" value="1 gallon">1 gallon</option><option class="form-control" value="16 ounces">16 ounces</option><option class="form-control" value="1 pound">1 pound</option></select></td><td><input class="btn btn-danger" type="button" name="removeBtn" id="removeBtn" value="Remove"></td></tr>';

            var instr =
                '<tr><td><input type="text" class="form-control" id="stepNo" name="stepNo[]" placeholder="Enter step number."/></td><td><input type="text" class="form-control" id="direction[]" name="direction[]" placeholder="Enter recipe directions."/></td><td><input class="btn btn-danger" type="button" name="removeBtnn" id="removeBtnn" value="Remove"></td></tr>';

            var max = 5;
            var x = 1;
            $("#addBtn").click(function () {
                if (x <= max) {
                    $("#table_field").append(html);
                    x++;
                }
            });

            $("#table_field").on('click', '#removeBtn', function () {
                $(this).closest('tr').remove();
                x--;
            });


            $("#addBtnn").click(function () {
                if (x <= max) {
                    $("#instruction_field").append(instr);
                    x++;
                }
            });

            $("#instruction_field").on('click', '#removeBtnn', function () {
                $(this).closest('tr').remove();
                x--;
            });
        });
    </script>
</head>

<body>

<div class="container">
            <form class="insert-form" id="insert_form" method="POST" action="">
                <hr>
                <h1 class="text-center">Add Input Field</h1>
                <hr>
                <div class="input-field">
                    <table class="table table-bordered" id="table_field">
                        <tr>
                            <th>Ingredient</th>
                            <th>Measurement</th>
                            <th>Add or Remove</th>
                        </tr>

                        <?php 
                            $conn = mysqli_connect("localhost", "root", "", "mealplan");

                            if (isset($_POST['saveBtn'])) {
                                $ingredient = $_POST['ingredient'];
                                $measurement = $_POST['measurement'];
                                $squery = mysqli_query($conn, "SELECT MAX(recipe) AS rID FROM recipe");
                                $rrow = mysqli_fetch_array($squery);
                                $rrowi = $rrow["rID"];
                                $rrowi++;


                                foreach ($ingredient as $key => $value) {
                                    if ($value == "Sauce") {
                                        $value = 1;
                                    }
                                    if ($value == "Wheat") {
                                        $value = 2;
                                    }
                                    if ($value == "Grains") {
                                        $value = 3;
                                    }
                                    if ($value == "Seasoning") {
                                        $value = 4;
                                    }
                                    if ($value == "Dairy") {
                                        $value = 5;
                                    }
                                    if ($value == "Fruits") {
                                        $value = 6;
                                    }
                                    if ($value == "Beans") {
                                        $value = 7;
                                    }
                                    $save ="INSERT INTO meal(rID, ingredient, measurement) VALUES('".$rrowi."','".$value."', '".$measurement[$key]."')";
                                    
                                    $query = mysqli_query($conn, $save);
                                }
                                echo '<div class="alert alert-success" role="alert">';
                                echo "Recipe has been successfully saved.";
                                echo '</div>';
                            }
                        ?>

                        <tr>
                            <td><select class="form-control" id="ingredient" name="ingredient[]" required>
                                <option class="form-control" selected disabled> -- Ingredient List -- </option>
                                <option class="form-control" value="Sauce">Sauce</option>
                                <option class="form-control" value="Wheat">Wheat</option>
                                <option class="form-control" value="Grains">Grains</option>
                                <option class="form-control" value="Seasoning">Seasoning</option>
                                <option class="form-control" value="Vegetables">Vegetables</option>
                                <option class="form-control" value="Dairy">Dairy</option>
                                <option class="form-control" value="Fruits">Fruits</option>
                                <option class="form-control" value="Beans">Beans</option>
                                </select>
                            </td>
                            <td><select class="form-control" id="measurement" name="measurement[]" required>
                                <option class="form-control" selected disabled> -- Measurement List -- </option>
                                <option class="form-control" value="1 cup">1 Cup</option>
                                <option class="form-control" value="1/2 cup">1/2 Cup</option>
                                <option class="form-control" value="1 ounce">1 ounce</option>
                                <option class="form-control" value="1 tablespoon">1 tablespoon</option>
                                <option class="form-control" value="1 gallon">1 gallon</option>
                                <option class="form-control" value="16 ounces">16 ounces</option>
                                <option class="form-control" value="1 pound">1 pound</option>
                                </select>
                            </td>
                            <td><input class="btn btn-success" type="button" name="addBtn" id="addBtn" value="Add"></td>
                        </tr>
                    </table>

                    <table class="table table-bordered" id="instruction_field">
                        <tr>
                            <th>Step Number</th>
                            <th>Direction</th>
                            <th>Add or Remove</th>
                        </tr>

                        <?php 
                            $conn = mysqli_connect("localhost", "root", "", "mealplan");

                            if (isset($_POST['saveBtn'])) {
                                $stepNo = $_POST['stepNo'];
                                $direction = $_POST['direction'];
                                $squery = mysqli_query($conn, "SELECT MAX(recipe) AS rID FROM recipe");
                                $rrow = mysqli_fetch_array($squery);
                                $rrowi = $rrow["rID"];
                                $rrowi++;


                                foreach ($stepNo as $kkey => $vvalue) {

                                    $save = "INSERT INTO recinst(recID, stepNo, direction) VALUES ('".$rrowi."','".$vvalue."', '".$direction[$kkey]."')";
                                    
                                    $query = mysqli_query($conn, $save);
                                }
                                echo '<div class="alert alert-success" role="alert">';
                                echo "Recipe has been successfully saved.";
                                echo '</div>';
                            }
                        ?>

                        <tr>
                            <td>
                                <input type="text" class="form-control" id="stepNo" name="stepNo[]" placeholder="Enter step number."/>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="direction" name="direction[]" placeholder="Enter recipe directions."/>
                            </td>
                            <td><input class="btn btn-success" type="button" name="addBtnn" id="addBtnn" value="Add"></td>
                        </tr>
                    </table>

                    <div class="container">
                        <input class="btn btn-success" type="submit" name="saveBtn" id="saveBtn" value="Save">
                    </div>
                </div>
            </form>
        </div>

    <!--<div class="container">
            <form class="recipe-form" id="recipe_form" method="POST" action="">
                <hr>
                <h1 class="text-center">Adding Instruction</h1>
                <hr>
                <div class="input-field">
                    
                    <div class="container">
                        <input class="btn btn-success" type="submit" name="saveBtnn" id="saveBtnn" value="Save">
                    </div>
                </div>
            </form>
        </div>-->
</body>
</html>