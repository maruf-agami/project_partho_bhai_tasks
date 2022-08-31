<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        /* setting the text-align property to center*/
        th,
        td {
            padding: 5px;
            text-align: center;
        }
    </style>

    <title>MenuMapTable</title>
</head>

<body>
    <div class="container-fluid my-5">
        <div class="card">
            <div class="card-body">
                <h3>Menu Map Table</h3>
            </div>
            <div class="card-body">
                <!-- <form id="">
                    <div class="border p-4">
                        <div class="row">

                            <div class="col p-2">
                                <label for="basic-url">Course Level</label>
                                <div class="input-group">
                                    <select name="course_label" class="custom-select" id="courseLevelSelect">
                                        <option selected>Select...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col p-2">
                                <label for="basic-url">Group</label>
                                <div class="input-group">
                                    <select name="group" class="custom-select" id="groupSelect">
                                        <option selected>Select...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col p-2">
                                <label for="basic-url">Academic Year</label>
                                <div class="input-group">
                                    <input name="academic_year" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>

                        </div>
                        <div class="row d-flex justify-content-end p-2">
                            <div class="">
                                <button class="btn btn-primary btn-sm" type="submit">Filter</button>
                                <button class="btn btn-secondary btn-sm">Save old to log</button>
                                <button class="btn btn-warning btn-sm">Reset</button>
                            </div>
                        </div>

                    </div>
                </form> -->
                <div class="my-3 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add</button>
                </div>
                <div class="">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Menu Name</th>
                                <th>Page URL</th>
                                <th>Parent Menu No</th>
                                <th>Make Page</th>
                                <th>For Lower Nav</th>
                                <th>Is External Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
            <div class="modal-content">
                <form id="menuForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Menu Map</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="menuname">Menu Name</label>
                                    <div class="input-group">
                                        <input name="menuname" type="text" class="form-control" id="menuname" aria-describedby="basic-addon3">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="menuid">Menu ID</label>
                                    <div class="input-group">
                                        <input name="menuid" type="text" class="form-control" id="menuid" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="pageurl">Page URL</label>
                                    <div class="input-group">
                                        <input name="pageurl" type="text" class="form-control" id="pageurl" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="parentmenuno">Parent Menu No</label>
                                    </div>
                                    <select name="parentmenuno" class="custom-select" id="parentmenuno">
                                        <option selected>Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="makepage">Make Page</label>
                                    </div>
                                    <select name="makepage" class="custom-select" id="makepage">
                                        <option selected>Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>

                                    </select>
                                </div>
                                <!-- <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="iscity">Is City *</label>
                                    </div>
                                    <select name="iscity" class="custom-select" id="iscity">
                                        <option selected>Choose...</option>
                                        <option value="0">Not City</option>
                                        <option value="1">City</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="forlowernav">For Lower Nav</label>
                                    </div>
                                    <select name="forlowernav" class="custom-select" id="forlowernav">
                                        <option selected>Choose...</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="isexternallink">Is External Link</label>
                                    </div>
                                    <select name="isexternallink" class="custom-select" id="isexternallink">
                                        <option selected>Choose...</option>
                                        <option value="0">Not City</option>
                                        <option value="1">City</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">Make Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="index.js"></script>
</body>

</html>