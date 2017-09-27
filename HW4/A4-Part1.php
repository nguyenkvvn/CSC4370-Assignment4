<html>
<body>

<form action="A4-Part1_php-processor.php" method="post" name="A4Form">

  <table>
    <tr>
      <td>
        Text Color:
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="#C0392B") echo "checked";?> value="Red"> Red
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Orange") echo "checked";?> value="Orange"> Orange
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Yellow") echo "checked";?> value="Yellow"> Yellow
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Green") echo "checked";?> value="Green"> Green
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Blue") echo "checked";?> value="Blue"> Blue
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Indigo") echo "checked";?> value="Indigo"> Indigo
        <br><input type="radio" name="textColor"
          <?php if (isset($textColor) && $textColor=="Violet") echo "checked";?> value="Violet"> Violet
      </td>
      <td>
        Background Color:
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="#C0392B") echo "checked";?> value="Red"> Red
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Orange") echo "checked";?> value="Orange"> Orange
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Yellow") echo "checked";?> value="Yellow"> Yellow
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Green") echo "checked";?> value="Green"> Green
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Blue") echo "checked";?> value="Blue"> Blue
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Indigo") echo "checked";?> value="Indigo"> Indigo
        <br><input type="radio" name="bgColor"
          <?php if (isset($bgColor) && $bgColor=="Violet") echo "checked";?> value="Violet"> Violet
      </td>
      <td>
        Font Family:
        <br><select name="fontfamilies">
          <option value="arial">Arial</option>
          <option value="courier">Courier</option>
          <option value="times">Times New Roman</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        Text Entry:
        <br>
        <textarea type="text" name="textentry" id="textentry" rows="3" cols="20" value=""></textarea>
        <?php echo $_POST['textentry']; ?>
      </td>
    </tr>
  </table>

  <br><input type="submit" value="Submit">
  <?php
    echo $textentry;
  ?>
</form>

</body>
</html>
