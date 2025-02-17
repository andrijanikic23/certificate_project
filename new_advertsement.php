<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "GET" action="Models/process_new_ad.php">
        <input name = "name" type="text" placeholder = "Enter the name of accommodation" required>
        <br>
        <p>Select the type of the accomodation:</p>
        <select name="category">
            <option value="apartman">Apartman</option>
            <option value="hotel">Hotel</option>
            <option value="vacation_home">Vacation home</option>

            
        </select>
        <p>Select amenities:</p>

        <input type="checkbox" name="wi_fi" value="Wi-fi">
        <label for="wi-fi">Wi-fi</label>

        <input type="checkbox" name="parking" value="Parking">    
        <label for="parking">Parking</label>    

        <input type="checkbox"  name="pet_friendly" value="Pet_friendly">    
        <label for="pet_friendly">Pet_friendly</label>            
        <br>
        <br>

        <input name = "price_per_night" type="number" placeholder = "Enter the price per night of accommodation" required>
        <br>
        <br>
        <input name = "location" type="text" placeholder = "Enter the location of accommodation" required>
        <br>
        <br>
        <input name = "image" type="text" placeholder = "Enter the image url of accommodation" required>
        <br>
        <br>
        <input name = "size" type="number" placeholder = "Enter the size of accommodation" required>
        <br>
        <br>
        <button>New ad</button>
    </form>
    
</body>
</html>

