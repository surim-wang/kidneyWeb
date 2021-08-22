<html>

<!-- 선택 버튼 만들기 -->
          <form action = "tableOne.php" method="POST" enctype="multipart/form-data">
        <?php
          $conn = mysqli_connect("localhost", "root", "123456"); // "sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"
          $db = mysqli_select_db($conn, 'opentutorials'); // 'epiz_29265313_kidney'
          $query = "SELECT distinct InspectName FROM `medicalrecords` ";
          $query_run = mysqli_query($conn, $query);
          ?>
            <select name="job">
            <?php while($row = mysqli_fetch_array($query_run)){?>
              <option ><?=$row[0]?></option>
            <?php } ?>
            </select>
          <input type="submit" name="submit" value="Select InspectName"/><br>
      </form>

     
</html>
