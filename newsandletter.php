   <div class="footer-newsletter" id="news">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Latest Updates</h4>
	           <div class="myTicker">
              <ul>
			  <?php
				include('conn.php');

				$fetch_basic_profile="select DATE_FORMAT(newsdate,'%d/%m/%Y') as newsdate,description,attachment from tbl_news order by id desc";	
				
				$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);
				
				$count = mysqli_num_rows($basic_profile_rs);
				
				if($count > 0) {

					while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
						{
						$id=$basic_profile_row[0];
						$attachments="news/attachments/";
						$attachment=$basic_profile_row[2];
						$newsdate= $basic_profile_row[0];
						$desc = $basic_profile_row[1];
						
						if($attachment == "") 
							echo "<li><span>$newsdate</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>$desc</a></li>";
						else	
							echo "<li><span>$newsdate</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='$attachments/$attachment'>$desc</a></li>";
					
						} 
					}
				else
					echo "<p class='mb-4'>Stay Tuned for our latest updates...</p>";		
				?>
			  
              </ul>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <h4 class="mt-5">Our Newsletter</h4>
            <p class="mb-4">Curious To Learn More...? Stay Tuned</p>
            <form action="action.php" method="post">
              <input type="email" name="email" required><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
<style>
.myTicker{
    width: 250px;
}
.myTicker ul{
    padding: 0;
}
.myTicker li{
    list-style: none;
    border-bottom: 1px solid green;
    padding: 10px;
}
.et-run{
    background: red;
}
.et-item-visible{
    color: blue !important;
}
</style>	