<!DOCTYPE html>
<html>
    <head>
    </head>

<body>
    <form  action="controleurevenement.php" method="POST" >
        <select name="trier">
        Tri par : 
            <option value="debutevent">Date</option>
            <option value="typeevent">Type</option>
            <option value="idlak">lakout</option>
        </select>
        <input type ="submit" name="recherche">
    </form>

    <form  action="controleurevenement.php" method="POST" >
        visualiser : 
            
        <input type ="submit" name="visualiser">
    </form>


</body>
</htmL>