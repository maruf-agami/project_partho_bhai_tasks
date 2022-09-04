<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b9e84834a9.js" crossorigin="anonymous"></script>
    <style>
        /* setting the text-align property to center*/

        /* td {
            padding: 5px;
            text-align: center;
        } */


        /* .table-bordered {
            border: 1px solid black !important;
        } */
    </style>

    <title>MenuMapTable</title>
</head>

<body>
    <div class="container-fluid my-5">
        <div class="card">
            <div class="card-header">
                <h3>Menu Map Table</h3>
            </div>
            <div class="card-body">
                <div class="my-3 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" id="addMenu">Add</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center">
                                <th class="text-left">Menu Name</th>
                                <th class="text-left">Page URL</th>
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-lg" role="document">
            <div class="modal-content">
                <form id="menu_map_setup_form">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" id="modal_close_button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="menuname">Menu Name</label>
                                    <div class="input-group">
                                        <input name="menuname" type="text" class="form-control" id="menu_map_setup_form_menu_name_input" aria-describedby="basic-addon3">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="menuid">Menu ID</label>
                                    <div class="input-group">
                                        <input name="menuid" type="text" class="form-control" id="menu_map_setup_form_menu_id_input" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="pageurl">Page URL</label>
                                    <div class="input-group">
                                        <input name="pageurl" type="text" class="form-control" id="menu_map_setup_form_page_url_input" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="parentmenu">Parent Menu</label>
                                    </div>
                                    <select name="parentmenu" class="custom-select" id="menu_map_setup_form_parent_menu_select">
                                        <option selected>Choose...</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="makepage">Make Page</label>
                                    </div>
                                    <select name="makepage" class="custom-select" id="menu_map_setup_form_make_page_select">
                                        <option selected>Choose...</option>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>

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
                                    <select name="forlowernav" class="custom-select" id="menu_map_setup_form_for_lower_nav_select">
                                        <option selected>Choose...</option>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <div class="input-group-prepend">
                                        <label for="isexternallink">Is External Link</label>
                                    </div>
                                    <select name="isexternallink" class="custom-select" id="menu_map_setup_form_is_external_link_select">
                                        <option selected>Choose...</option>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" id="menu_map_setup_form_menu_submit_button" class="btn btn-primary"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="index.js"></script>
</body>

</html>