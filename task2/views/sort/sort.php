<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>employee</title>
</head>
<body>
    <div class="data">
        <div class="container">
            <form action="sorting.php" method="POST">
            
                <label for="name"> Employee Name <input type="text" name="employee-a"> </label>
                <label for="id"> ID <input type="text" name="employee"> </label>
               <br>
               <label for="name"> Employee Name <input type="text" name="employee"> </label>
                <label for="id"> ID <input type="text" name="employee"> </label>
                <br>
                <label for="name"> Employee Name <input type="text" name="employee"> </label>
                <label for="id"> ID <input type="text" name="employee"> </label>
                <br>
                sort by
                <select name="sort">
                    <option value="Id" selected>
                        Id
                    </option>
                    <option value="name">
                        employee name
                    </option>
                </select>
                <button type="submit" class="btn btn-success" name='submit'> submit</button>
            </form>
        </div>
    </div>
    
    
</body>
</html>