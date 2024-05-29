<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuse</title>
</head>
<body>
<form action="excuse.php" method="POST">
        <label for="childName">Name of the child:</label><br>
        <input type="text" id="childName" name="childName" required><br><br>
        
        <label>Gender of the child:</label><br>
        <input type="radio" id="girl" name="childGender" value="girl" required>
        <label for="girl">Girl</label><br>
        <input type="radio" id="boy" name="childGender" value="boy" required>
        <label for="boy">Boy</label><br><br>
        
        <label for="teacherName">Name of the teacher:</label><br>
        <input type="text" id="teacherName" name="teacherName" required><br><br>
        
        <label>Reason for the absence:</label><br>
        <input type="radio" id="illness" name="absenceReason" value="illness" required>
        <label for="illness">Illness</label><br>
        <input type="radio" id="deathPet" name="absenceReason" value="deathPet" required>
        <label for="deathPet">Death of the pet (or a family member)</label><br>
        <input type="radio" id="extraCurricular" name="absenceReason" value="extraCurricular" required>
        <label for="extraCurricular">Significant extra-curricular activity</label><br>
        <input type="radio" id="other" name="absenceReason" value="other" required>
        <label for="other">Any other excuse of your choice</label><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>