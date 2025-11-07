<!doctype html>
<html lang="en">

<head>
    <title>HRMS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <nav
        class="navbar navbar-expand-sm navbar-dark"
        style="
            background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
        ">
        <a class="navbar-brand" href="../Views/Index.php">HRMS</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="../Views/Index.php" aria-current="page">Regions <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Views/Country.php">Countries</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="../Views/Department.php">Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Views/Job.php">Job</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Views/Location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Views/Employee.php">Employee</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="../Views/JobHistory.php">Job History</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input
                    class="form-control me-sm-2"
                    type="text"
                    placeholder="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>


