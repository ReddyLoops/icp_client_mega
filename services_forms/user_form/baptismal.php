<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAPTISMAL - ADMIN</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include DataTables plugin -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#dataTable').DataTable();

        // Show modal form for adding new data
        $('#addBtn').click(function() {
            $('#modalTitle').text('Add Product');
            $('#dataForm')[0].reset();
            $('#dataModal').modal('show');
        });

        // Save data
        $('#saveBtn').click(function() {
            // Perform your save operation here
            // ...

            $('#dataModal').modal('hide');
        });

        // Edit data
        $(document).on('click', '.editBtn', function() {
            $('#modalTitle').text('Edit Data');
            var data = $(this).data('info');
            // Populate the form fields with data
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#dataModal').modal('show');
        });

        // Delete data
        $(document).on('click', '.deleteBtn', function() {
            var data = $(this).data('info');
            // Perform your delete operation here
            // ...
        });
    });
    </script>
</head>
<style>
/* Custom styles for Bootstrap Tables */
.custom-tab-content {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #dee2e6;
    border-top: none;
}

.nav-fill {

    >.nav-link,
    .nav-item {
        border: 1px #dee2e6 solid;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
}

.nav-link:active,
.nav-item.show .nav-link {
    color: black;
    background-color: $nav-tabs-link-active-bg;
    border-color: $nav-tabs-link-active-border-color;

}

a {
    color: #495057;
}

.nav-links {
    border-top-left-radius: 1.5rem;
    border-top-right-radius: 0.5rem;
}

/* style for navtabs */

li a {
    text-decoration: none;
    color: #1ab188;
    transition: .5s ease;
}

li a:hover {
    color: #179b77;
}

.form {
    background: rgba(19, 35, 47, 0.9);
    padding: 10px;
    max-width: 95%;
    margin: 0 auto 0 auto;
    border-radius: 50px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    width: 99%
}

.tab-group:after {
    content: "";
    display: table;
    clear: both;
}

.tab-group li a {
    border-radius: 40px;
    display: block;
    text-decoration: none;
    padding: 15px;
    /* background: rgba(160, 179, 176, 0.25); */
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: .5s ease;
}

/* .tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
} */
.tab-group .active a {
    background: #1ab188;
    color: #ffffff;
}
</style>

<body>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1000px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Application Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">BACK</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <!-- form -->
                        <form>
                            <fieldset disabled>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Pangalan:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Apelyido ng Ina (Dalaga):</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Apelyido ng Ama:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Petsa ng Kapanganakan:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Edad(Buwan):</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Lugar ng Kapanganakan:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Petsa ng Binyag:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Kasal:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Saan Kinasal:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Pangalan ng Ama:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Lugar na Pinagmulan ng Ama:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Pangalan ng Ina:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Lugar na Pinagmulan ng Ina:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">kasalukuyang tirahan</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                        <br>
                                        <p>NINONG AT NINANG(Bawal ang palayaw at kailangan 16 anyos pataas
                                            lamang at binyagang katoliko)</p>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Ninong:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Edad:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">relihiyon:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Tirahan:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Ninang:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Edad:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">relihiyon:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Tirahan:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <hr>

                                <p>NINONG AT NINANG(Bawal ang palayaw at kailangan 16 anyos pataas lamang at
                                    binyagang katoliko)</p>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Pangalan ng nagpalista:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Lagda:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Contact-no:</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Petsa ng Pag Tatala:</label>
                                        <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Oras:</label>
                                        <input type="time" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Kopya ng Birth certificate:</label>
                                        <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputEmail4">Kopya ng Marriage certificate:</label>
                                        <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Decline</button>
                        <button type="button" class="btn btn-primary">Approve</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
</form>
