<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/lordsnews/style/global.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/lordsnews/">LordsNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/lordsnews/">Home</a>
                </li>
                <li class="nav-item d-flex">
                    <input type="text" class="form-control mr-sm-2"  id="search" placeholder="search..">
                    <button class="btn lordsBtn my-2 my-sm-0" type="submit">Search</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    function search() {
        var s = document.getElementById("search");
        if (s.value != "") {
            window.location.href = "/lordsnews/search.php/?searchkey=" + s.value;
        }
    }
</script>