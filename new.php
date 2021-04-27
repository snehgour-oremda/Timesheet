<?php
include 'db/connection.php';
$result = $conn->query("SELECT * FROM user");
    //$result=mysql_query("select * from leave_request");
    while($row = $result->fetch_array())    
    {
        $k =1;

    ?>
        <tr>
        <td><?php echo $row['user_id'];?></td>
        <td> <?php echo $row['name'];?></td>
        <td> <?php echo $row['email'];?></td>
        <td> <?php echo $row['phone'];?></td>
        
        <td>
        <a href="leave_dashboard.php?id=<?php echo $row['id']; ?>&status='1'" style="text-decoration:none;">Accept </a> |
        <a href="leave_dashboard.php?id=<?php echo $row['id']; ?>&status='2'"> Reject </a>|
        <a href="#pop<?php echo $k; ?>"> Suggest</a> </td>



        <div id="pop<?php echo $k; ?>" class="pop-up">

        <div class="popBox">
        <div class="popScroll">
        <form>
           <textarea name="suggest" id="suggest" cols="60" rows="8" ></textarea>
           <input type="text" name="id" value="<?php echo $row['user_id']; ?>"</input>
           <input type="text" name="status" value="3"></input>
          <button type="submit" name="submit"   class="btn btn-primary">Submit</button>
         </form>
           <!-- popup content end here -->
      </div>
          <a href="#links" class="close"><span>Back to links</span></a>
          </div>
          <a href="#links" class="lightbox">Back to links</a>
          </div>
    </tr>
  <?php 

       $k++;

  }?>
