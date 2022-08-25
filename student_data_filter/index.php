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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h3>SET STUDENT ROLL</h3>
            </div>
            <div class="card-body">
                <form id="filter_form_1">
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
                </form>
                <div class="p-4">
                    <div class="row">
                        <div class="col">
                            <label for="basic-url">Promoted to Group</label>
                            <div class="input-group">
                                <select class="custom-select" id="promotedGroupSelect">
                                    <option selected>Select...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label for="basic-url">Promoted to Academic Year</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="promotedAcademicYear" aria-describedby="basic-addon3">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Course Level</th>
                                <th>Group</th>
                                <th>Academic Year</th>
                                <th>Roll No</th>
                                <th>Section</th>
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

    <script src="index.js"></script>
</body>

</html>