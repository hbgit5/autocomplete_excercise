<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocompleteh</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>

<body>

    <div id="search-container">
        <input type="text" id="search123" class="form-control" placeholder="Search Birdies"/>
        <div id="search-results-container">
            <ul id="search-results-list" class="list-clean">
                
            </ul>
        </div>
    </div>
    
    <hr/>
    
    <form action="add.php" method="post">
        <div class="form-group">
            <label for="birds">Bird to your Mother!</label>
            <input type="text" name="bird" class="form-control" id="birds" placeholder="Birdies">
        </div>
        
        <button type="submit" class="btn btn-default">Add</button>
    </form>

    <script src="autocomplete.js"></script>
</body>

</html>