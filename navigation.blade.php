<!-- resources/views/navigation.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">MajasLapasNosaukums</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2>Tabula</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Published Date</th>
                <th scope="col">Publisher Name</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Java-How to program</th>
                <td>2020-12-2</td>
                <td>Otto</td>
                <td>Computer science</td>
                <td>Otto</td>
                <td>
                <button type="button" class="btn btn-primary">Dzest</button>
                <button type="button" class="btn btn-primary">Rediget</button>
            </tr>
            <tr>
                <th scope="row">Python</th>
                <td>2021-03-14</td>
                <td>Jacob</td>
                <td>Computer science</td>
                <td>J.Bond</td>
                <td>
                <button type="button" class="btn btn-primary">Dzest</button>
                <button type="button" class="btn btn-primary">Rediget</button>
            </tr>
            <tr>
                <th scope="row">C#</th>
                <td>2024-01-21</td>
                <td>Larry</td>
                <td>Computer science</td>
                <td>Larry Bird</th>
                <td>
                <button type="button" class="btn btn-primary">Dzest</button>
                <button type="button" class="btn btn-primary">Rediget</button>
            </tr>
        </tbody>
    </table>
</div>
