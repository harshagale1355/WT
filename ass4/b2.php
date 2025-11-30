<!DOCTYPE html>
<html>
<body>

<form action="b2part2.php" method="post">
    <h2>Select Your Display Preferences</h2>

    Font Style:
    <select name="font_family">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Times New Roman">Times New Roman</option>
        <option value="Courier New">Courier New</option>
    </select><br><br>

    Font Size:
    <select name="font_size">
        <option value="14px">14px</option>
        <option value="18px">18px</option>
        <option value="22px">22px</option>
        <option value="28px">28px</option>
    </select><br><br>

    Font Color:
    <input type="color" name="font_color" value="#000000"><br><br>

    Background Color:
    <input type="color" name="bg_color" value="#ffffff"><br><br>

    <input type="submit" value="Save Preferences">
</form>

</body>
</html>
